<?php

$arr=[1, 9, 4.5, 6.6, 5.7, -4.5];
for ($i=0;$i<count($arr);$i++){
    for ($j=0;$j<count($arr)-$i-1;$j++){
        if ($arr[$j]>$arr[$j+1]){
            $temp = $arr[$j];
            $arr[$j]=$arr[$j+1];
            $arr[$j+1]=$temp;
        }
    }
}
for ($i=0;$i<count($arr);$i++){
    echo $arr[$i].' , ';
}
