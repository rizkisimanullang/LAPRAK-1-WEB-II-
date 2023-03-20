<?php 
$celcius = 37.841;

// ini konversi Suhu 
$fahrenheit = (9/5) * $celcius + 32;
$reamur = (4/9) * ($fahrenheit - 32);
$kelvin = $celcius + 273.15;

$celcius = number_format($celcius, 3, ',', '.');
$fahrenheit = number_format($fahrenheit, 4, ',', '.');
$reamur = number_format($reamur, 4, ',', '.');
$kelvin = number_format($kelvin, 4, ',', '.');

printf("Fahrenheit (F) = %.4f <br>",$fahrenheit );
printf("Reamur (R) = %.4f <br>",$reamur);
//lakukan printf("Kelvin (K) = %.4f", $kelvin);
// echo "Kelvin (K) = ". round($kelvin, 4);
?>