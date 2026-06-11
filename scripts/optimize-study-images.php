<?php

/**
 * Resize/compress all images under public/assets/imgs/study to <= 200 KB.
 *
 * Usage (from project root or anywhere):
 *   php scripts/optimize-study-images.php
 *
 * Optional: pass a different folder path as first argument:
 *   php scripts/optimize-study-images.php public/assets/imgs/work
 */

$root = isset($argv[1])
    ? (str_starts_with($argv[1], '/') || preg_match('/^[A-Za-z]:/', $argv[1])
        ? $argv[1]
        : dirname(__DIR__) . '/' . ltrim($argv[1], '/'))
    : dirname(__DIR__) . '/public/assets/imgs/study';

if (!is_dir($root)) {
    fwrite(STDERR, "Directory not found: {$root}\n");
    exit(1);
}

$maxBytes = 200 * 1024;
$maxBytesTarget = (int) ($maxBytes * 0.95); // aim slightly under limit

$extensions = ['webp', 'png', 'jpg', 'jpeg'];
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS)
);

function loadImage(string $path, string $mime)
{
    return match ($mime) {
        'image/webp' => @imagecreatefromwebp($path),
        'image/png' => @imagecreatefrompng($path),
        'image/jpeg' => @imagecreatefromjpeg($path),
        default => false,
    };
}

function saveWebp($image, string $path, int $quality, int $maxTarget): int
{
    $tmp = $path . '.tmp.webp';
    if (!imagewebp($image, $tmp, $quality)) {
        @unlink($tmp);
        return PHP_INT_MAX;
    }
    $size = filesize($tmp) ?: PHP_INT_MAX;
    if ($size <= $maxTarget) {
        rename($tmp, $path);
        return $size;
    }
    @unlink($tmp);
    return $size;
}

function optimizeToTarget($image, string $path, int $origW, int $origH): array
{
    global $maxBytesTarget;

    $w = $origW;
    $h = $origH;
    $working = $image;

    $maxEdges = [1920, 1600, 1400, 1280, 1120, 1024, 900, 800, 720, 640];

    foreach ($maxEdges as $maxEdge) {
        if (max($w, $h) > $maxEdge) {
            $ratio = $maxEdge / max($w, $h);
            $nw = max(1, (int) round($w * $ratio));
            $nh = max(1, (int) round($h * $ratio));
            $resized = imagecreatetruecolor($nw, $nh);
            imagealphablending($resized, false);
            imagesavealpha($resized, true);
            imagecopyresampled($resized, $working, 0, 0, 0, 0, $nw, $nh, $w, $h);
            if ($working !== $image) {
                imagedestroy($working);
            }
            $working = $resized;
            $w = $nw;
            $h = $nh;
        }

        for ($q = 82; $q >= 40; $q -= 2) {
            $size = saveWebp($working, $path, $q, $maxBytesTarget);
            if ($size <= $maxBytesTarget) {
                if ($working !== $image) {
                    imagedestroy($working);
                }
                return ['ok' => true, 'w' => $w, 'h' => $h, 'q' => $q, 'bytes' => $size];
            }
        }
    }

    $size = saveWebp($working, $path, 40, $maxBytesTarget);
    if ($working !== $image) {
        imagedestroy($working);
    }

    return [
        'ok' => $size <= $maxBytesTarget,
        'w' => $w,
        'h' => $h,
        'q' => 40,
        'bytes' => $size === PHP_INT_MAX ? 0 : $size,
    ];
}

echo "Optimizing images in: {$root}\n";
echo "Target: <= " . round($maxBytes / 1024) . " KB per file\n\n";

$processed = 0;
$skipped = 0;
$failed = [];

foreach ($iterator as $file) {
    if (!$file->isFile()) {
        continue;
    }

    $path = $file->getPathname();
    $ext = strtolower($file->getExtension());
    if (!in_array($ext, $extensions, true)) {
        continue;
    }

    $before = filesize($path);
    if ($before <= $maxBytes) {
        $skipped++;
        continue;
    }

    $info = @getimagesize($path);
    if ($info === false) {
        $failed[] = $path . ' (unreadable)';
        continue;
    }

    $image = loadImage($path, $info['mime']);
    if ($image === false) {
        $failed[] = $path . ' (load failed)';
        continue;
    }

    imagepalettetotruecolor($image);
    imagealphablending($image, true);
    imagesavealpha($image, true);

    $result = optimizeToTarget($image, $path, $info[0], $info[1]);
    imagedestroy($image);

    $after = filesize($path) ?: 0;
    $processed++;

    $kbBefore = round($before / 1024, 1);
    $kbAfter = round($after / 1024, 1);
    $status = $result['ok'] ? 'OK' : 'WARN';
    echo "{$status} " . str_replace($root . DIRECTORY_SEPARATOR, '', $path)
        . " {$kbBefore}KB -> {$kbAfter}KB ({$result['w']}x{$result['h']} q{$result['q']})\n";

    if (!$result['ok']) {
        $failed[] = $path . " still {$kbAfter}KB";
    }
}

echo "\nProcessed: {$processed}, skipped (already OK): {$skipped}, failed: " . count($failed) . "\n";
if ($failed !== []) {
    foreach ($failed as $f) {
        echo "  - {$f}\n";
    }
    exit(1);
}

exit(0);
