<?php 


$filename = "teste.jpg";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode = "data:" . $mimetype . ";base64," .$base64;

 ?>

<a href="<?=$base64encode?>" target="_blank"> LINK </a>
<br/>
<br/>
<br/>
<br/>
<br/>
<img src="<?=$base64encode?>">

