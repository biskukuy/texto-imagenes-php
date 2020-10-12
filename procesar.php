<?php
if (!isset($_GET["texto1"]) || !isset($_GET["texto2"])) {
    exit("No hay texto que colocar");
}
$rutaFuente = __DIR__ . "/" . "sansita.ttf";
$nombreImagen = "imagen.png";
$imagen = imagecreatefrompng($nombreImagen);
$color = imagecolorallocate($imagen, 0, 0, 0);
$texto1 = $_GET["texto1"];
$texto2 = $_GET["texto2"];
$tamanio = 20;
$angulo = 0;
$espacio = 10;
$x = 400;
$y = 50;
$x2 = 400;
$y2 = $y + $espacio + $tamanio;
imagettftext($imagen, $tamanio, $angulo, $x, $y, $color, $rutaFuente, $texto1);
imagettftext($imagen, $tamanio, $angulo, $x2, $y2, $color, $rutaFuente, $texto2);
header("Content-Type: image/png");
imagepng($imagen);
imagedestroy($imagen);
