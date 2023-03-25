<?php 

$ts = strtotime("2001-05-20");
$ts2 = strtotime("now");
$ts3 = strtotime("+1 day");
$ts4 = strtotime("+1 week");
$ts5 = strtotime("+1 year");

echo date("l, d/m/Y", $ts);
echo "<br>";
echo date("l, d/m/Y", $ts2);
echo "<br>";
echo date("l, d/m/Y", $ts3);
echo "<br>";
echo date("l, d/m/Y", $ts4);
echo "<br>";
echo date("l, d/m/Y", $ts5);
echo "<br>";


 ?>