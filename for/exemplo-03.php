<?php

echo "<select>";

for ($i=date("Y"); $i >= date("Y")-50; $i--) { 
 //echo $i. "<br/>";
 echo '<option value="'.$i.'">'.$i.'</option>'; 
}

echo "</select>";
echo "<br/>";
echo "_____________________________";
echo "<br/>";
echo "<br/>";

for ($i=date("Y"); $i >= date("Y")-50; $i--) { 
 echo $i. "<br/>";
 
}
?>