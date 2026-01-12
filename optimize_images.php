<?php
// optimize_images.php

$sourceDir = __DIR__ . '/New folder';
$destDir = __DIR__ . '/assets/images/gallery';

if (!is_dir($destDir)) {
    mkdir($destDir, 0777, true);
}

$files = scandir($sourceDir);
$count = 0;

foreach ($files as $file) {
    if (in_array($file, ['.', '..'])) continue;

    $sourcePath = $sourceDir . '/' . $file;
    $info = pathinfo($sourcePath);
    $ext = strtolower($info['extension']);
    
    if (!in_array($ext, ['jpg', 'jpeg', 'png', 'webp'])) continue;

    echo "Processing: $file ... ";

    // Load image
    switch ($ext) {
        case 'jpg':
        case 'jpeg':
            $image = imagecreatefromjpeg($sourcePath);
            break;
        case 'png':
            $image = imagecreatefrompng($sourcePath);
            break;
        case 'webp':
            $image = imagecreatefromwebp($sourcePath);
            break;
    }

    if (!$image) {
        echo "Failed to load.\n";
        continue;
    }

    // Fix Orientation before resizing
    if ($ext === 'jpg' || $ext === 'jpeg') {
        $exif = @exif_read_data($sourcePath);
        if ($exif && isset($exif['Orientation'])) {
            switch ($exif['Orientation']) {
                case 3:
                    $image = imagerotate($image, 180, 0);
                    break;
                case 6:
                    $image = imagerotate($image, -90, 0);
                    break;
                case 8:
                    $image = imagerotate($image, 90, 0);
                    break;
            }
        }
    }

    // Resize if too big (max width 1200px)
    $width = imagesx($image);
    $height = imagesy($image);
    $maxWidth = 1200;

    if ($width > $maxWidth) {
        $newWidth = $maxWidth;
        $newHeight = floor($height * ($maxWidth / $width));
        $newImage = imagecreatetruecolor($newWidth, $newHeight);
        
        // Handle transparency
        imagealphablending($newImage, false);
        imagesavealpha($newImage, true);
        
        imagecopyresampled($newImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
        imagedestroy($image);
        $image = $newImage;
    }

    // Save as WebP
    $destPath = $destDir . '/' . $info['filename'] . '.webp';
    imagewebp($image, $destPath, 80); // 80% quality
    imagedestroy($image);

    echo "Saved to assets/images/gallery/" . $info['filename'] . ".webp\n";
    $count++;
}

echo "Done! Processed $count images.\n";
?>
