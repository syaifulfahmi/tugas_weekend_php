<?php

$a = 4;
$b = 7;
$c = 10;
$d = 12;

function fungsi_pow($nilai,$pangkat){
	return pow($nilai,$pangkat)*6;
}


echo "1. Hitunglah luas permukaan kubus dengan panjang setiap rusuknya sebagai berikut.<br><br>";
echo "a. $a cm <br> b. $b cm <br> c. $c cm <br> d. $d cm <br>";
echo "<br>";
echo "<b>Luas dengan panjang rusuk $a : <b>",fungsi_pow($a,2)," cm<sup>2</sup><br>";
echo "<b>Luas dengan panjang rusuk $b : <b>",fungsi_pow($b,2)," cm<sup>2</sup><br>";
echo "<b>Luas dengan panjang rusuk $c : <b>",fungsi_pow($c,2)," cm<sup>2</sup><br>";
echo "<b>Luas dengan panjang rusuk $d : <b>",fungsi_pow($d,2)," cm<sup>2</sup><br>";
?>