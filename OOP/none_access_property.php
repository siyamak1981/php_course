<?php

class Human{
    private function __construct(){}
    // we dont want make object of class so we create a construct
    public $name ;
    private $skin;
    static function makeWhite($skin):Human
    {
        $human = new Human();
        $human->name = "siyamak";
        $human->skin = $skin;
        return $human;

    }
    public function getSkin(){
        return $this->skin;
    }
}

// $hum = new Human();
// echo $hum->name;


$human = Human::makeWhite("white");
// $human->skin = "blue";
// echo $human->skin."\n\r";


//getSkin was created bec that was privated a property that is not active out of class
echo $human->getSkin()."\n\r";