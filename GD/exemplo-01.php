<?php

header("Content-Type: image/png");

$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 0, 0, 0);
$orange = imagecolorallocate($image, 248, 80, 0);

imagestring($image, 5, 60, 120, "Shado Transportes", $orange);

imagepng($image);

imagedestroy($image);

?>