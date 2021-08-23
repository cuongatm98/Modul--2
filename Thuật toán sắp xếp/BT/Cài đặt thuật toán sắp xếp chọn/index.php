<?php
$arr=[1, 9, 4.5, 6.6, 5.7, -4.5];

function selectionSort($array)
{
    for ($i = 0; $i < count($array) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$j] < $array[$min]) {
                $min = $j;
            }
        }
        $array = swapPositions($array, $i, $min);
    }
    return $array;
}

function swapPositions($data, $left, $right)
{
    $backupOldDataRightValue = $data[$right];
    $data[$right] = $data[$left];
    $data[$left] = $backupOldDataRightValue;
    return $data;
}
echo "\nSorted Array :\n";
echo implode(', ', selectionSort($arr));