<?php 


spl_autoload_register(function($nameClass){

    var_dump($nameClass."<br/>");

$dirClass = "class";
$fileName = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

if(file($fileName)){
 	require_once($fileName);
}

});




 ?>