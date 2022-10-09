<?php


class Counter{

    public $counter = 10;

    private function show(){
        return $this->counter;
    }

    public function increase(){
        self::show();
        $this->counter ++ ;
    }
    

}
$counter = new Counter();
echo $counter->counter."\n\r";
$counter->increase()."\n\r";
echo $counter->counter."\n\r";
