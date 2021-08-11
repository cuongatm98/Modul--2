<?php
include_once "Point2D.php";
include_once "Point3D.php";
$point2D=new Point2D(10,20);
$point2D->toString();
echo "<br>";
$point3D=new Point3D(10,20,30);
$point3D->toString();