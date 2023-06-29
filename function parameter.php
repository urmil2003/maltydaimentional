<!DOCTYPE html>
<html>
<head>
<title>function with argument with buttons</title>
</head>
<body>
<form method="POST">
<table border="2" bgcolor=" lightpurple">
<tr>
enter the value of N1-<input type="number" name="n1"><br>
enter the value of N2-<input type="number" name="n2"><br>
    </tr>
    <tr>
    <td>
<input type="submit" name="b1" value="add">
<input type="submit" name="b1" value="subtract">
<input type="submit" name="b1" value="multiply">
<input type="submit" name="b1" value="divide">
</td>
   </tr>
</table>
</form>
<?php

function addition($n1,$n2){
$ans=$n1+$n2;
echo "Addition is:- ".$ans;
}
function subtraction($n1,$n2){
$ans=$n1-$n2;
echo "subtraction is:- ".$ans;
}
function multiplication($n1,$n2){
$ans=$n1*$n2;
echo "multiplication is:- ".$ans;
}
function division($n1,$n2){
$ans=$n1/$n2;
echo "division is:- ".$ans;
}


$action=null;

$action=isset($_POST["b1"]);


if($action!=null)
{
$action=$_POST["b1"];
$n1=$_POST["n1"];  
$n2=$_POST["n2"];
if($action=="add"){
addition($n1,$n2);
}
if($action=="subtract"){
subtraction($n1,$n2);
}
if($action=="multiply"){
multiplication($n1,$n2);
}
if($action=="divide"){
division($n1,$n2);
}
}




?>
</body>
</html>

