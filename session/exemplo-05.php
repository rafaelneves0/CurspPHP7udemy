<?php 
require_once("config.php");

echo session_save_path();
echo "<br>";
var_dump(session_status());


switch (session_status()) {
	case '0':
		echo "<br>";
		echo "PHP_SESSION_DISABLED: se as sessões estiverem desabilitadas.";
		echo "<br>";		
		break;
		
		case '1':
		echo "<br>";
		echo "PHP_SESSION_NONE: se as sessões estiverem habilitadas, mas nenhuma existir.";
		echo "<br>";
		break;
		
		case '2':
		echo "<br>";
		echo "PHP_SESSION_ACTIVE: se as sessões estiverem habilitadas, e uma existir.";
		echo "<br>";
		break;
	default:
		// code...
		break;
}

 ?>