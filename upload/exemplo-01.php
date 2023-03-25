<form method="POST" enctype="multipart/form-data">

	<input type="file" name="fileUpload">
	<br><br>
	<button type="submit">ENVIAR</button>

</form>

<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {

	$file = $_FILES["fileUpload"];

	if($file["error"]){

		throw new Exception("Erro: ".$file["Error"]);

	}

	$dirUploads = "uploads";

	if(!is_dir($dirUploads)){

		mkdir($dirUploads);

	}

	if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){

		echo ("upload realizado com sucesso.");

	}else{

		throw new Exception("Não foi possivel realizar o upload.");

	}

}

 ?>