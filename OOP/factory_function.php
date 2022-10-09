<?php

class Human
{
    public $name;
    public function getname()
    {
        return $this->name;
    }

}
function humanMaker($name): Human
// give me a object by type Human
{
    $human = new Human();
    $human->name = $name;
    return $human;
}

$human = humanMaker("siyamak");
echo $human->name . "\n\r";
