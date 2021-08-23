<?php
class Country{

    public string $name;
    public int $totalGoldMedals;
    public function __construct($name,$totalGoldMedals)
    {
        $this->name=$name;
        $this->totalGoldMedals=$totalGoldMedals;
    }

}
