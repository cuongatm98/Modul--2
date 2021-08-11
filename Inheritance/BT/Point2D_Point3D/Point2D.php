<?php
class Point2D{
    public float $X;
    public float $Y;
    public function __construct($X,$Y){
        $this->X=$X;
        $this->Y=$Y;
    }
    public function getX(): float
    {
        return $this->X;
    }
    public function getY(): float
    {
        return $this->Y;
    }
    public function setX($X):void
    {
        $this->X=$X;
    }
    public function setY($y):void
    {
        $this->Y=$y;
    }
    public function setXY($X,$Y):void
    {
        $this->X=$X;
        $this->Y=$Y;
    }
    public function getXY():array
    {
        $arr=[];
        array_push($arr,$this->X);
        array_push($arr,$this->Y);
        return $arr;
    }
    public function toString()
    {
        echo "point2D:"."X=".$this->X.",Y=".$this->Y."<br>";

    }
}
