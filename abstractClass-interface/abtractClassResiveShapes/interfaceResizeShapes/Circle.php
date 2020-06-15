<?php

include_once ('Shape.php');
include ('Resizeable.php');

class Circle extends Shape implements Resizeable
{
    public $radius;
    public static $circlesRadius = [];
    public static $circlesArea = [];
    public static $circlesPerimeter = [];
    public static $circlesName = [];
    public static $count = 0;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
        Circle::$circlesArea[] = floor($this->getArea());
        Circle::$circlesPerimeter[] = floor($this->getPerimeter());
        Circle::$circlesName[] = $this->name;
        Circle::$circlesRadius[] = $this->radius;
        Circle::$count++;
    }

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter()
    {
        return pi() * $this->radius * 2;
    }

    public static function maxArea()
    {
        $max = Circle::$circlesArea[0];
        for($i = 0; $i < Circle::$count; $i++){
            if($max < Circle::$circlesArea[$i]){
                $max = Circle::$circlesArea[$i];
            }
        }
        return "<br> Diện tích lớn nhất trong các hình tròn: ".$max;
    }

    public static function minPerimeter()
    {
        $min = Circle::$circlesPerimeter[0];
        for($i = 0; $i < Circle::$count; $i++){
            if($min > Circle::$circlesPerimeter[$i]){
                $min = Circle::$circlesPerimeter[$i];
            }
        }
        return "<br> Chu vi nhỏ nhất trong các hình tròn: ".$min;
    }

    public static function findShape($name){
        for($i = 0; $i < Circle::$count; $i++){
            if(Circle::$circlesName[$i] === $name){
                return "=> Hình bạn tìm có bán kính là ".Circle::$circlesRadius[$i];
            }
        }
        return "Không có tên này";
    }
    public function resize($rate)
    {
        $this->radius = $this->radius * $rate;
    }
}