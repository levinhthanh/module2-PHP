<?php

abstract class Shape
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show(){
        return "I am a shape. My name is $this->name";
    }

    abstract public function getArea();

    abstract public function getPerimeter();

    abstract public static function maxArea();

    abstract public static function minPerimeter();

    abstract public static function findShape($name);
}