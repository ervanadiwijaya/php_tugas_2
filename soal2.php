<?php

$sell = 80000;
$buy = 50000;

$profit = $sell - $buy;
$percentProfit = $profit * 100 / $sell;

echo "Jual = ${sell} </br>";
echo "Beli = ${buy} </br>";
echo "Keuntungan = ...? </br>";
echo "Jawaban: </br>";

echo $percentProfit . "%";
