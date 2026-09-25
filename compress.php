<?php
$directory = 'public';
if (!is_dir($directory)) {
    die("Directorio public no encontrado.\n");
}

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));
$totalSaved = 0;

foreach ($iterator as $file) {
    if ($file->isFile() && in_array(strtolower($file->getExtension()), ['jpg', 'jpeg', 'png'])) {
        $path = $file->getRealPath();
        $originalSize = filesize($path);
        $sizeMB = $originalSize / (1024 * 1024);
        
        // Solo comprimimos imágenes mayores a 1 MB
        if ($sizeMB > 1) {
            echo "Comprimiendo: " . $file->getFilename() . " (Original: " . round($sizeMB, 2) . " MB)...\n";
            $ext = strtolower($file->getExtension());
            
            $img = false;
            if ($ext === 'jpg' || $ext === 'jpeg') {
                $img = @imagecreatefromjpeg($path);
            } elseif ($ext === 'png') {
                $img = @imagecreatefrompng($path);
            }
            
            if ($img !== false) {
                $width = imagesx($img);
                $height = imagesy($img);
                
                // Si la imagen es más grande que 1920px (Full HD), la redimensionamos
                if ($width > 1920) {
                    $newWidth = 1920;
                    $newHeight = floor($height * ($newWidth / $width));
                    $resized = imagecreatetruecolor($newWidth, $newHeight);
                    
                    if ($ext === 'png') {
                        imagealphablending($resized, false);
                        imagesavealpha($resized, true);
                        $transparent = imagecolorallocatealpha($resized, 255, 255, 255, 127);
                        imagefilledrectangle($resized, 0, 0, $newWidth, $newHeight, $transparent);
                    }
                    imagecopyresampled($resized, $img, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
                    $imgToSave = $resized;
                } else {
                    $imgToSave = $img;
                }

                // Sobrescribimos el archivo original
                if ($ext === 'png') {
                    imagepng($imgToSave, $path, 8); 
                } else {
                    imagejpeg($imgToSave, $path, 75); // 75 es calidad ideal para web
                }
                
                $newSize = filesize($path);
                $saved = $originalSize - $newSize;
                $totalSaved += $saved;
                
                echo "-> Listo! Nuevo peso: " . round($newSize/(1024*1024), 2) . " MB\n";
            } else {
                echo "-> No se pudo abrir la imagen.\n";
            }
        }
    }
}

echo "\n--- TERMINADO ---\n";
echo "Se ahorraron en total: " . round($totalSaved / (1024 * 1024), 2) . " MB\n";
