<?php
include_once("Country.php");
$vn = new Country('Vietnames', 6);
$lao = new Country('Laos', 9);
$cam = new Country('Campuchia', 4);
$countries = [$vn, $lao, $cam];
function sortMedal($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr) - $i - 1; $j++) {
            if (($arr[$j]->totalGoldMedals) < ($arr[$j + 1]->totalGoldMedals)) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

$countries = sortMedal($countries);

foreach ($countries as $country) {
    echo 'Nước '.$country->name . ' với ' . $country->totalGoldMedals.' huy chương';
    echo '<br>';
}

//$h->push('HN',6);
//$h->push('VN',4);
//$h->push('ML',2);
//$h->push('KN',1);
//$h->push('DN',7);
//print_r($h->array);
