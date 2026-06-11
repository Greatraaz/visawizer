<?php

/**
 * Convert pa-{slug}-{slot}.png to WebP under public/assets/imgs/protection/.
 *
 * Topic slots: hero, situations, checklist, documents, mistakes, process
 * Main page: pa-s1-bg, pa-band-soft, pa-split-protection, pa-evidence, pa-urgent, pa-cta-bg
 *
 * Usage:
 *   php scripts/install-protection-visa-images.php
 */

$projectRoot = dirname(__DIR__);
$srcDirs = array_filter([
    getenv('PROTECTION_IMG_SRC') ?: null,
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

$destBase = $projectRoot . '/public/assets/imgs/protection';
$topicPattern = '/^pa-(.+)-(hero|situations|checklist|documents|mistakes|process)\.png$/i';
$mainPattern = '/^pa-(s1-bg|band-soft|split-protection|evidence|urgent|cta-bg)\.png$/i';

$files = glob($srcDir . '/pa-*.png') ?: [];
if ($files === []) {
    fwrite(STDERR, "No pa-*.png files in {$srcDir}\n");
    exit(1);
}

$converted = 0;
$skipped = 0;

foreach ($files as $png) {
    $base = basename($png);
    $webpName = null;

    if (preg_match($topicPattern, $base, $m)) {
        $folder = $m[1];
        $slot = strtolower($m[2]);
        $outDir = "{$destBase}/{$folder}";
    } elseif (preg_match($mainPattern, $base, $m)) {
        $slot = $m[1];
        $outDir = $destBase;
        $webpName = "pa-{$slot}.webp";
    } else {
        fwrite(STDERR, "Skip (bad name): {$base}\n");
        $skipped++;
        continue;
    }

    if (!is_dir($outDir) && !mkdir($outDir, 0755, true)) {
        fwrite(STDERR, "Cannot create {$outDir}\n");
        exit(1);
    }

    $webp = isset($webpName) ? "{$outDir}/{$webpName}" : "{$outDir}/{$slot}.webp";
    unset($webpName);

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
