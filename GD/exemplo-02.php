<?php 

$img = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($img, 0, 0, 0);
$color = imagecolorallocate($img, 254,80,0);

imagestring($img, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($img, 5, 100, 250, "Melhor NOIVA do MUNDO:", $titleColor);
imagestring($img, 3, 305, 252, "Susane Silva do Nascimento", $color);
imagestring($img, 5, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

//header("Content-Type: image/jpeg");
imagejpeg($img, "certificado-".date("d-m-Y").".jpg", 100);
imagedestroy($img);

 ?>