<form>

<input	type="text" name="nome">
<br>
<input	type="date" name="nascimento">
<br>
<input type="submit" name="OK">
<br>


</form>

<?php

if (isset($_GET)){

	foreach ($_GET as $key => $value) {
	echo"nome do campo:".$key;
	echo"Valor do campo:".$value;
	echo"<hr>";
	}
}
?>