<?php

/**
 * Convert generated PNGs (fv-{folder}-{slot}.png) to WebP under public/assets/imgs/family/{folder}/.
 *
 * Source: Cursor assets folder (project assets/ or env FAMILY_IMG_SRC).
 *
 * Usage:
 *   php scripts/install-family-visa-topic-images.php
 */

$projectRoot = dirname(__DIR__);
$srcDirs = array_filter([
    getenv('FAMILY_IMG_SRC') ?: null,
    $projectRoot . '/assets',
    dirname($projectRoot) . '/assets',
]);

$srcDir = null;
foreach ($srcDirs as $dir) {
    if ($dir && is_dir($dir)) {
        $srcDir = $dir;
        break;
    }
}

if (!$srcDir) {
    fwrite(STDERR, "Source assets directory not found.\n");
    exit(1);
}

$destBase = $projectRoot . '/public/assets/imgs/family';
$pattern = '/^fv-(.+)-(hero-bg|intro-suit|profile|strategy|support)\.png$/i';
$files = glob($srcDir . '/fv-*-*.png') ?: [];

if ($files === []) {
    fwrite(STDERR, "No fv-*-*.png files in {$srcDir}\n");
    exit(1);
}

$converted = 0;
$skipped = 0;

foreach ($files as $png) {
    $base = basename($png);
    if (!preg_match($pattern, $base, $m)) {
        fwrite(STDERR, "Skip (bad name): {$base}\n");
        $skipped++;
        continue;
    }

    $folder = $m[1];
    $slot = strtolower($m[2]);
    $outDir = "{$destBase}/{$folder}";
    if (!is_dir($outDir) && !mkdir($outDir, 0755, true)) {
        fwrite(STDERR, "Cannot create {$outDir}\n");
        exit(1);
    }

    $webp = "{$outDir}/{$slot}.webp";
    $img = @imagecreatefrompng($png);
    if (!$img) {
        fwrite(STDERR, "Cannot read {$png}\n");
        $skipped++;
        continue;
    }
    imagealphablending($img, true);
    imagesavealpha($img, true);
    if (!imagewebp($img, $webp, 82)) {
        imagedestroy($img);
        fwrite(STDERR, "WebP write failed: {$webp}\n");
        $skipped++;
        continue;
    }
    imagedestroy($img);
    echo "OK {$webp}\n";
    $converted++;
}

echo "Done: {$converted} converted, {$skipped} skipped.\n";
