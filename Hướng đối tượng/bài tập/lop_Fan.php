<?php

class Fan
{
    const FLOW = 1;
    const MEDIUM = 2;
    const  FAST = 3;
    private int $speed = self::FLOW;
    private bool $on = false;
    private int $radius = 5;
    private $color = "blue";

    public function __construct($sPeed, $coLor, $On, $raDius)
    {
        $this->speed = $sPeed;
        $this->color = $coLor;
        $this->radius = $raDius;
        $this->on = $On;
    }

    public function setSpeed($newspeed)
    {
        $this->speed = $newspeed;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setRadius($newradius)
    {
        $this->radius = $newradius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setColor($newcolor)
    {
        $this->color = $newcolor;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function toString()
    {
        if ($this->on) {
            echo "fan is on" . "<br>";
            echo " Color : " . $this->getColor() . "<br>";
            echo "Radius : " . $this->getRadius() . "<br>";
            echo "Speed : " . $this->getSpeed() . "<br>";
        } else {
            echo "fan is off" . "<br>";
            echo " Color : " . $this->getColor() . "<br>";
            echo "Radius : " . $this->getRadius() . "<br>";
            echo "Speed : " . $this->getSpeed() . "<br>";
        }

    }
}

$hienthi = new Fan(2,"red",true,10);
$hienthi->toString();

$hienthi1 = new Fan(4,"blue",false,5);
$hienthi1->toString();

