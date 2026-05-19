<?php

namespace App\Services;

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
        $cacheKey = 'youtube_channel_videos_' . config('services.youtube.channel_id');

        return Cache::remember(
            $cacheKey,
            (int) config('services.youtube.cache_ttl', 3600),
            fn () => $this->fetchVideosFromRss()
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
                ->withHeaders(['User-Agent' => 'Visawizer/1.0'])
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
                $thumbnail = 'https://i.ytimg.com/vi/' . $videoId . '/hqdefault.jpg';
            }

            $videos[] = [
                'id' => $videoId,
                'title' => html_entity_decode((string) $entry->title, ENT_QUOTES | ENT_HTML5, 'UTF-8'),
                'thumbnail' => $thumbnail,
                'published_at' => (string) $entry->published,
                'url' => 'https://www.youtube.com/watch?v=' . $videoId,
                'embed_url' => 'https://www.youtube.com/embed/' . $videoId,
            ];
        }

        return $videos;
    }
}
