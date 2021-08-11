<?php
class Circle{
    public float $radius;
    public string $color;
    public function __construct($radius,$color){
        $this->radius=$radius;
        $this->color=$color;
    }
    public function circleArea(): float|int
    { return pi()*$this->radius**2;
    }
    public function chuvi(): float|int
    {
        return pi()*$this->radius*2;
    }
    public function toString(){
        echo "<br>"."Bán kính = ".$this->radius."<br>"."Color = ".$this->color."<br>"."Diện tích= ".$this->circleArea()."<br>"."Chu vi ".$this->chuvi();
    }
}
