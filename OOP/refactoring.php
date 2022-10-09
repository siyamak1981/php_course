<?php

class Human
{
    public $name;
    private $skin;

    private static function make($name, $skin)
    {
        $human = new Human();
        $human->name = $name;
        $human->skin = $skin;
        return $human;
    }

    public static function makeSkin($name, $skin):Human
    {
        return Human::make($name, $skin);
    }

    public function getSkin()
    {
        return $this->skin;
    }

}

$human = Human::makeSkin("ali", "black");
echo $human->name . "\n\r";
echo $human->getSkin()."\n\r";
