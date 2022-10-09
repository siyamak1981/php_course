<?php

class Human
{
    public function __construct($name)
    {
        $this->name = $name;
    }
    public $name;
}
$human = new Human("siyamak");
echo $human->name . "\n\r";