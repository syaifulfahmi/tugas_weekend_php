<?php

$r = 14;
$phi = 22/7;

function luas_lingkaran($r,$phi){
	return $phi*pow($r,2);
}

function k_lingkaran($r,$phi){
	return 2*$phi*$r;
}


echo "6. Sebuah roda sepeda yang berbentuk lingkaran memiliki diameter sebesar 14 cm.<br> Maka luas dan keliling roda tersebut adalah ?<br><br>";

echo "<b>Luasnya adalah : <b>",luas_lingkaran($r,$phi)," cm<sup>2</sup><br>";
echo "<b>Kelilingnya adalah : <b>",k_lingkaran($r,$phi)," cm";

?>