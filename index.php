<?php 

$var = array(1,2,3,4,5);

foreach ($var as $v) {
	echo $v;
}

$var2 = array("A"=>"teste1", "B"=>"teste2");

print_r($var2);
echo $var2["A"];

$var3 = array("teste1","teste2");

echo $var3[0]; 

?>

