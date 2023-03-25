<?php 

$img = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($img, 0, 0, 0);
$color = imagecolorallocate($img, 0,0,250);

imagettftext($img, 32, 0, 300, 150, $titleColor,"fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($img, 25, 0, 100, 250, $titleColor, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf",  "Melhor noiva do mundo: ");
imagettftext($img, 22, 0, 410, 250, $color, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Susane Silva do Nascimento");
imagestring($img, 5, 590, 570, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");
imagejpeg($img);
imagedestroy($img);

 ?>