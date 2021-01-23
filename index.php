<?php 

#while

echo"while:";
$i=0;
while ($i < 10){
	echo $i;
	$i++;
}


#do...while

echo"<br>do...while:";

$i=0;
do{
	echo $i;
	$i++;
}while ($i < 10);


#for

echo"<br>for:";
$i=0;
for ($i=0; $i < 10;$i++){
	echo $i;
}

# foreach
echo"<br>foreach:";
$i=[0,1,2,3,4];
foreach($i as $j){
	echo $j;
}




?>

