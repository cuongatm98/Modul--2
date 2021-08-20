<?php
function soLanXuatHienPhanTu($number, $value)
{
    $count = 0;
    for ($i = 0; $i < count($number); $i++) {
        if ($number[$i] == $value) {
            $count++;
        }
    }
    return $count;
}

$number = [1, 4, 5, 3, 2, 6, 3, 2, 1, 1];
$value = 1;
$counts = soLanXuatHienPhanTu($number, $value);
echo 'số  lần suất hiện của phần tử số '. $value . ' là ' . $counts.' lần';