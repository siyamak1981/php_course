<?php

class Human
{
    public $name;

    public static function humanMaker($name)
    {
        $human = new Human();
        $human->name = $name;
        return $human;
    }
}
$human = Human::humanMaker("siyamak");
echo $human->name . "\n\r";
