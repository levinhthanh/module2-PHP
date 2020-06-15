<?php

include_once ('Shape.php');


class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;
    public static $rectanglesWidth = [];
    public static $rectanglesHeight = [];
    public static $rectanglesArea = [];
    public static $rectanglesPerimeter = [];
    public static $rectanglesName = [];
    public static $count = 0;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
        Rectangle::$rectanglesArea[] = $this->getArea();
        Rectangle::$rectanglesPerimeter[] = $this->getPerimeter();
        Rectangle::$rectanglesName[] = $this->name;
        Rectangle::$rectanglesWidth[] = $this->width;
        Rectangle::$rectanglesHeight[] = $this->height;
        Rectangle::$count++;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }

    public function getPerimeter()
    {
        return ($this->width + $this->height) * 2;
    }

    public static function maxArea()
    {
        $max = Rectangle::$rectanglesArea[0];
        for($i = 0; $i < Rectangle::$count; $i++){
            if($max < Rectangle::$rectanglesArea[$i]){
                $max = Rectangle::$rectanglesArea[$i];
            }
        }
        return "<br> Diện tích lớn nhất trong các hình chữ nhật: ".$max;
    }

    public static function minPerimeter()
    {
        $min = Rectangle::$rectanglesPerimeter[0];
        for($i = 0; $i < Rectangle::$count; $i++){
            if($min > Rectangle::$rectanglesPerimeter[$i]){
                $min = Rectangle::$rectanglesPerimeter[$i];
            }
        }
        return "<br> Chu vi nhỏ nhất trong các hình chữ nhật: ".$min;
    }

    public static function findShape($name){
        $string = "";
        for($i = 0; $i < Rectangle::$count; $i++){
            if(Rectangle::$rectanglesName[$i] === $name){
                $string .= "Hình bạn tìm có Chiều dài: ".Rectangle::$rectanglesHeight[$i];
                $string .= "- Chiều rộng: ".Rectangle::$rectanglesWidth[$i];
                return $string;
            }
        }
    }
    public function resize($rate)
    {
        $this->radius = $this->radius * $rate;
    }
}