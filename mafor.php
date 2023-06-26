<?php
$emp=array(array(1,"rushika","urmil",50000),
array(2,"rushika","urmil",50000));

for($row=0; $row < 2; $row++){
	for($col=0; $col < 4; $col++){

		echo $emp[$row][$col]. " ";

	}
	echo "<br>";
}


?>