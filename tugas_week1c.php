<?php

$r = 10;
$t = 30;
$phi = 3.14;

function volume_tabung($r,$phi,$t){
	return $phi*pow($r,2)*$t;
}


echo "3. Sebuah tabung memiliki jari – jari dan tinggi masing – masing 10 cm dan <br> 30 cm, lalu tentukan lah berapa volume dari tabung tersebut ? <br>";

echo "<b>volume dari tabung tersebut adalah : <b>",volume_tabung($r,$phi,$t)," cm<sup>3</sup>";

?>