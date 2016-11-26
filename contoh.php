<?php

require('class.bmi.php');

$bmi_saya = new bmi();
$bmi_saya->height = 1.78;
$bmi_saya->weight = 70;


echo "Tinggi Badan =" .$bmi_saya->height;
echo "<br/>";
echo "<br/>";
echo "Berat Badan =" .$bmi_saya->weight;
echo "<br/>";
echo "<br/>";
echo $bmi_saya->calculate_bmi();
echo "<br/>";

?>
