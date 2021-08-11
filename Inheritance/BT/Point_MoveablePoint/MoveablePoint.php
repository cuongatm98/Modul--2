<?php
class MoveablePoint extends Point{
    public float $Xspeed;
    public float $Yspeed;
    public function __construct($X, $Y,$Xspeed,$Yspeed)
    {
        parent::__construct($X, $Y);
        $this->Xspeed=$Xspeed;
        $this->Yspeed=$Yspeed;
    }
    public function getXspeed():float
    {
       return $this->Xspeed;
    }
    public function setXspeed(float $Xspeed):void
    {
        $this->Xspeed=$Xspeed;
    }
    public function getYspeed():float
    {
        return $this->Yspeed;
    }

    /**
     * @param float $Yspeed
     */
    public function setYspeed(float $Yspeed): void
    {
        $this->Yspeed = $Yspeed;
    }
    public function move()
    {
        $this->Xspeed+=$this->X;
        $this->Yspeed+=$this->Y;
    }
    public function getSpeed():array
    {
        $this->move();
        $arr=[];
        array_push($arr,$this->Xspeed);
        array_push($arr,$this->Yspeed);
        return $arr;
    }
    public function toString()
    {
        $this->move();
        echo "MoveablePoint:" . "X=" . $this->Xspeed. ",Y=" . $this->Yspeed . "<br>";

    }

}
