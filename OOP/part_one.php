<?php

class Human {
    public $name;
    public function foo(){
        $this->name = $name;
    }
}
$human = new Human();
$human->name = "siyamak";
echo $human->name;

?>