<?php 

function trataNome($name)
{
	if (!$name)
	{
		throw new Exception("Nome não informado <br/>", 1);
	}

	echo ucfirst($name)."<br>";

}

try {

	trataNome("Joao");
	trataNome("");

}catch(Exception $e){


	echo $e->getMessage();

}
finally{

	echo "Executou o Try! <br/>";

}



 ?>