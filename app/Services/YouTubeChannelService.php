<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use SimpleXMLElement;

class YouTubeChannelService
{
    /**
     * @return array<int, array<string, string>>
     */
    public function getVideos(): array
    {
        $cacheKey = 'youtube_channel_videos_v2_' . config('services.youtube.channel_handle', 'visawizer');

        return Cache::remember(
            $cacheKey,
            (int) config('services.youtube.cache_ttl', 3600),
            function () {
                $videos = $this->fetchVideosFromRss();

                if ($videos !== []) {
                    return $videos;
                }

                return $this->fetchVideosFromChannelPage();
            }
        );
    }

    public function channelUrl(): string
    {
        $handle = config('services.youtube.channel_handle', 'visawizer');

        return 'https://www.youtube.com/@' . ltrim($handle, '@');
    }

    /**
     * @return array<int, array<string, string>>
     */
    private function fetchVideosFromRss(): array
    {
        $channelId = config('services.youtube.channel_id');

        if (empty($channelId)) {
            return [];
        }

        try {
            $response = Http::timeout(20)
                ->withHeaders(['User-Agent' => 'Mozilla/5.0 (compatible; Visawizer/1.0)'])
                ->get('https://www.youtube.com/feeds/videos.xml', [
                    'channel_id' => $channelId,
                ]);
        } catch (\Throwable $exception) {
            Log::error('YouTube RSS fetch failed.', ['message' => $exception->getMessage()]);

            return [];
        }

        if (!$response->successful()) {
            Log::warning('YouTube RSS HTTP error.', ['status' => $response->status()]);

            return [];
        }

        $xml = @simplexml_load_string($response->body());

        if (!$xml instanceof SimpleXMLElement) {
            return [];
        }

        $videos = [];

        foreach ($xml->entry as $entry) {
            $yt = $entry->children('http://www.youtube.com/xml/schemas/2015');
            $media = $entry->children('http://search.yahoo.com/mrss/');

            $videoId = (string) ($yt->videoId ?? '');

            if ($videoId === '') {
                continue;
            }

            $thumbnail = '';

            if (isset($media->group->thumbnail)) {
                $thumbnail = (string) $media->group->thumbnail->attributes()->url;
            }

            if ($thumbnail === '') {
                $thumbnail = $this->thumbnailUrl($videoId);
            }

            $videos[] = $this->formatVideo(
                $videoId,
                html_entity_decode((string) $entry->title, ENT_QUOTES | ENT_HTML5, 'UTF-8'),
                $thumbnail,
                (string) $entry->published
            );
        }

        return $videos;
    }

    /**
     * Fallback when RSS is unavailable (YouTube often returns 404).
     *
     * @return array<int, array<string, string>>
     */
    private function fetchVideosFromChannelPage(): array
    {
        $handle = ltrim((string) config('services.youtube.channel_handle', 'visawizer'), '@');

        if ($handle === '') {
            return [];
        }

        try {
            $response = Http::timeout(25)
                ->withHeaders([
                    'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
                    'Accept-Language' => 'en-US,en;q=0.9',
                ])
                ->get('https://www.youtube.com/@' . $handle . '/videos');
        } catch (\Throwable $exception) {
            Log::error('YouTube channel page fetch failed.', ['message' => $exception->getMessage()]);

            return [];
        }

        if (!$response->successful()) {
            Log::warning('YouTube channel page HTTP error.', ['status' => $response->status()]);

            return [];
        }

        $videos = $this->parseVideosFromChannelHtml($response->body());

        if ($videos === []) {
            Log::warning('YouTube channel page returned no parseable videos.', ['handle' => $handle]);
        }

        return $videos;
    }

    /**
     * @return array<int, array<string, string>>
     */
    private function parseVideosFromChannelHtml(string $html): array
    {
        if (!preg_match_all('/\/vi\/([a-zA-Z0-9_-]{11})\/hqdefault\.jpg/', $html, $matches)) {
            return [];
        }

        $orderedIds = [];

        foreach ($matches[1] as $videoId) {
            if (!in_array($videoId, $orderedIds, true)) {
                $orderedIds[] = $videoId;
            }
        }

        $videos = [];

        foreach ($orderedIds as $videoId) {
            $pos = strpos($html, '/vi/' . $videoId . '/hqdefault');

            if ($pos === false) {
                continue;
            }

            $chunk = substr($html, $pos, 14000);
            $title = $this->extractLockupTitle($chunk);
            $publishedAt = $this->extractPublishedAt($chunk);

            if ($title === '') {
                $title = 'Visawizer video';
            }

            $videos[] = $this->formatVideo(
                $videoId,
                $title,
                $this->thumbnailUrl($videoId),
                $publishedAt
            );
        }

        return $videos;
    }

    private function extractLockupTitle(string $chunk): string
    {
        if (!preg_match(
            '/"lockupMetadataViewModel"\s*:\s*\{.*?"title"\s*:\s*\{\s*"content"\s*:\s*"((?:[^"\\\\]|\\\\.)*)"/s',
            $chunk,
            $match
        )) {
            return '';
        }

        return $this->decodeJsonString($match[1]);
    }

    private function extractPublishedAt(string $chunk): string
    {
        if (!preg_match(
            '/"text"\s*:\s*\{\s*"content"\s*:\s*"(\d+\s+(?:second|minute|hour|day|week|month|year)s?\s+ago)"/i',
            $chunk,
            $match
        )) {
            return now()->toAtomString();
        }

        $timestamp = strtotime($match[1]);

        if ($timestamp === false) {
            return now()->toAtomString();
        }

        return Carbon::createFromTimestamp($timestamp)->toAtomString();
    }

    private function decodeJsonString(string $value): string
    {
        $decoded = json_decode('"' . $value . '"');

        return is_string($decoded) ? $decoded : stripcslashes($value);
    }

    private function thumbnailUrl(string $videoId): string
    {
        return 'https://i.ytimg.com/vi/' . $videoId . '/hqdefault.jpg';
    }

    /**
     * @return array<string, string>
     */
    private function formatVideo(string $videoId, string $title, string $thumbnail, string $publishedAt): array
    {
        return [
            'id' => $videoId,
            'title' => $title,
            'thumbnail' => $thumbnail,
            'published_at' => $publishedAt,
            'url' => 'https://www.youtube.com/watch?v=' . $videoId,
            'embed_url' => 'https://www.youtube.com/embed/' . $videoId,
        ];
    }
}
