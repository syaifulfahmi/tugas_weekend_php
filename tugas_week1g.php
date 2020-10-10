<?php

$r = 21;
$phi = 22/7;
$putaran = 200;


function jarak($r,$phi,$putaran){
	return 2*$phi*$r*$putaran;
}


echo "7. Pak Andi memiliki sebuah mobil yang panjang jari-jari ban mobil tersebut sebesar 21 cm.<br> Saat mobil tersebut berjalan, ban mobil tersebut berputar sebanyak 200 kali. <br> Berapakah jarak yang ditempuh mobil tersebut ?<br><br>";

echo "<b>Jarak tempuhnya adalah : <b>",jarak($r,$phi,$putaran)/100," m";

?>