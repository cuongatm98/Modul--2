<?php
include_once "Circle.php";
include_once "Cylinder.php";
$circle=new Circle(3,"red");
echo "Circle:";
$circle->toString();
echo "<br>";
$cylinder=new Cylinder(3,"black",4);
echo "Cylinder:";
$cylinder->toString();
