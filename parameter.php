<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
// Returns maximum in array
function getMax($array)
{
   $n1 = count($array);
   $max = $array[0];
   for ($i = 1; $i < $n1; $i++)
       if ($max < $array[$i])
           $max = $array[$i];
    return $max;      
}
 
// Returns maximum in array
function getMin($array)
{
   $n2 = count($array);
   $min = $array[0];
   for ($i = 1; $i < $n2; $i++)
       if ($min > $array[$i])
           $min = $array[$i];
    return $min;      
}
 
// Driver code
$array = array(1, 2,3,4,5,6,7,8);
echo(getMax($array));
echo("\n");
echo(getMin($array));
?>

</body>
</html>