<?php
// optimize_images.php
// This script compresses all jpg/png files in assets/images in-place to fix Lighthouse warnings.

$dirs = [__DIR__ . '/assets/images', __DIR__ . '/assets/images/gallery'];
$count = 0;

foreach ($dirs as $dir) {
    if (!is_dir($dir)) continue;
    
    $files = scandir($dir);
    foreach ($files as $file) {
        if (in_array($file, ['.', '..'])) continue;
        
        $path = $dir . '/' . $file;
        if (!is_file($path)) continue;
        
        $info = pathinfo($path);
        $ext = strtolower($info['extension'] ?? '');
        
        if (!in_array($ext, ['jpg', 'jpeg', 'png'])) continue;

        echo "Processing: $file ... ";

        if ($ext === 'jpg' || $ext === 'jpeg') {
            $image = @imagecreatefromjpeg($path);
        } else {
            $image = @imagecreatefrompng($path);
        }

        if (!$image) {
            echo "Failed to load.<br>\n";
            continue;
        }

        $width = imagesx($image);
        $height = imagesy($image);
        $maxWidth = 1000;

        if ($width > $maxWidth) {
            $newWidth = $maxWidth;
            $newHeight = floor($height * ($maxWidth / $width));
            $newImage = imagecreatetruecolor($newWidth, $newHeight);
            
            if ($ext === 'png') {
                imagealphablending($newImage, false);
                imagesavealpha($newImage, true);
            }
            
            imagecopyresampled($newImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
            imagedestroy($image);
            $image = $newImage;
        }

        if ($ext === 'jpg' || $ext === 'jpeg') {
            imagejpeg($image, $path, 70); // Compress to 70% quality
        } else {
            imagepng($image, $path, 8); // High compression for PNG
        }
        
        imagedestroy($image);
        echo "Optimized!<br>\n";
        $count++;
    }
}

echo "<h3>Done! Processed $count images.</h3>";
?>
