<?php
include_once "Point.php";
include_once "MoveablePoint.php";
$point=new Point(10,20);

$point->toString();
//echo $point->getXY() ;
echo "<br>";
$moveablePoint=new MoveablePoint(10,20,20,30);

$moveablePoint->toString();
//echo $moveablePoint->getSpeed() ;
