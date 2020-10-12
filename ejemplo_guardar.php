<?php
$rutaFuente = __DIR__ . "/" . "sansita.ttf";
$nombreImagen = "imagen.png";
$imagen = imagecreatefrompng($nombreImagen);
$color = imagecolorallocate($imagen, 0, 0, 0);
$tamanio = 20;
$angulo = 0;
$x = 400;
$y = 50;
$texto = "parzibyte.me";
imagettftext($imagen, $tamanio, $angulo, $x, $y, $color, $rutaFuente, $texto);
$salida = "procesada.png";
imagepng($imagen, $salida);
imagedestroy($imagen);
echo "Imagen guardada correctamente como " . $salida;
