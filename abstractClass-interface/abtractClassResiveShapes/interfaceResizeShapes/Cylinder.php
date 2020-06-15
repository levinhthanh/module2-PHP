<?php

include_once ('Circle.php');

class Cylinder extends Circle
{
    public $height;
    public static $cylindersVolume = [];
    public static $count = 0;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
        Cylinder::$cylindersVolume[] = floor($this->getArea() * $this->height);
        Cylinder::$count++;
    }

    public function getVolume(){
        return parent::getArea() * $this->height;
    }

    public static function maxVolume()
    {
        $max = Cylinder::$cylindersVolume[0];
        for($i = 0; $i < Cylinder::$count; $i++){
            if($max < Cylinder::$cylindersVolume[$i]){
                $max = Cylinder::$cylindersVolume[$i];
            }
        }
        return "<br> Thể tích lớn nhất trong các hình trụ: ".$max;
    }
    
}