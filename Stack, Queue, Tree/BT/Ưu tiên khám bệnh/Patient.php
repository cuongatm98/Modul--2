<?php

class Patient
{
    public array $arr=[] ;
    public int $name ;
    public int $code;

    public function __construct($name,$code)
    {
        $this->name = $name;
        $this->code = $code;
    }


}