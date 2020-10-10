<?php

$r = 14;
$phi = 22/7;

function luas_lingkaran($r,$phi){
	return $phi*pow($r,2);
}


echo "5. Sebuah lingkaran memiliki jari-jari sebesar 14 cm. <br>Tentukan luas lingkaran tersebut ? <br>";

echo "<b>Luasnya adalah : <b>",luas_lingkaran($r,$phi)," cm<sup>2</sup>";

?>