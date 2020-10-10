<?php

$luas = 3750;

function akar($nilai){
	return sqrt($nilai/6);
}


echo "2. Sebuah kotak kayu berbentuk kubus memiliki luas permukaan 3.750 cm<sup>2</sup>.<br> Hitunglah panjang sisi kotak kayu tersebut ? <br><br>";

echo "<b>Jadi panjang sisi kotak kayu tersebut adalah akar dari $luas dibagi 6, yaitu : <b>",akar($luas)," cm";

?>