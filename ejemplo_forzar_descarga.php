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
header("Content-Type: image/png");
$salida = "imagen_procesada.png";
header('Content-Disposition: attachment; filename="' . $salida . '"');
imagepng($imagen);
imagedestroy($imagen);
