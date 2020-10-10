<?php

$r = 14;
$t = 10;
$phi = 22/7;

function luas_tabung($r,$t,$phi){
	return 2*$phi*$r*($r+$t);
}


echo "4. Sebuah tabung memiliki jari – jari dan tinggi masing – masing 14 cm dan 10 cm, <br> maka tentukan lah berapa luasnya ? <br>";

echo "<b>Jadi, luasnya adalah : <b>",luas_tabung($r,$t,$phi)," cm<sup>2</sup>";

?>