<?php

class Dancer
{
    public string $name;
    public string $gender;

    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    public function getName()
    {
        return $this->name;
    }
}
