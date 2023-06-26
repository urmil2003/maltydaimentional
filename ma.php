<?php

$emp =array( array(1, "urmil", "manager", 50000),
	   array(2, "meet", "manager", 100000));

echo "<table border='2px'>";

foreach($emp as $v1){

    echo "<tr>";

	foreach($v1 as $v2){
		echo "<td> $v2  </td>";
	}
	echo "</tr>";
}

 echo "</table>";



//for($row=0; $row < 2; $row++){
	//for($col=0; $col < 4; $col++){

		//echo $emp[$row][$col]. " ";

	//}
	//echo "<br>";
//}

//echo $emp[0][0]. " ";
//echo $emp[0][1]. " ";
//echo $emp[0][2]. " ";
//echo $emp[0][3]. " ";

//echo "<br>";

//echo $emp[1][0]. " ";
//echo $emp[1][1]. " ";
//echo $emp[1][2]. " ";
//echo $emp[1][3]. " ";

//echo "<pre>";
//print_r($emp);

//echo "</pre>";

?>