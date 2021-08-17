<?php
include_once "Calculato.php";

$calculator = new Calculator();
echo $calculator->calculate(1,2, '+');
echo "<br>";
echo $calculator->calculate(1,2, '-');
echo "<br>";
echo $calculator->calculate(1,2, '*');
echo "<br>";
echo $calculator->calculate(1,1, '/');
