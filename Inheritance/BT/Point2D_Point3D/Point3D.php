<?php
class Point3D extends Point2D{
    public float $Z;
    public function __construct($X, $Y,$Z)
    {
        parent::__construct($X, $Y);
        $this->Z=$Z;
    }
    public function setZ($Z):void
    {
        $this->Z=$Z;
    }
    public function getZ(): float
    {
        return $this->Z;
    }
    public function setXYZ($X,$Y,$Z):void
    {
        parent::setXY($X,$Y);
        $this->Z=$Z;
    }
    public function getXYZ():array{
        $arr=[];
        array_push($arr,$this->X);
        array_push($arr,$this->Y);
        array_push($arr,$this->Z);
        return $arr;
    }
    public function toString()
    {
        echo "point3D:"."X=".$this->X.",Y=".$this->Y.",Z=".$this->Z."<br>";
    }
}
