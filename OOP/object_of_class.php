<?php
class Human{
    public $name;

    public function getname(){
        return $this->name;
    }

}

$human = new Human();
$human->name = "siyamak";
echo $human->getname();