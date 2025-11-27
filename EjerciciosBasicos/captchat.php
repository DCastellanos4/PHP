<?php
if (!isset($_GET['texto'])) {
    die('No hay texto');
}

$texto = $_GET['texto'];
$img = imagecreatefromjpeg('fondo.jpg');

// Solo 5 caracteres
$texto = strtoupper(substr($texto, 0, 5));

for ($i = 0; $i < strlen($texto); $i++) {
    $color = imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));
    $ordenada = rand(25, 75);
    $abscisa = $i * 40 + rand(10, 20);
    $angulo = rand(-30, 30); // más realista
    $size = 20;

    imagettftext(
        $img,
        $size,
        $angulo,
        $abscisa,
        $ordenada,
        $color,
        __DIR__ . '/arial.ttf', // Ruta completa recomendada
        substr($texto, $i, 1)
    );
}

// Encabezado correcto
header('Content-Type: image/jpeg');
imagejpeg($img);
imagedestroy($img);
$captcha=$_POST['captcha'];
if($captcha===$texto){
    echo "Captcha correcto";
}else {
    echo "captcha incorrecto";
}
?>
