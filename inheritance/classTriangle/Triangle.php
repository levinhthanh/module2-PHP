<?php

class Triangle extends Shape{
    public $side1;
    public $side2;
    public $side3;
    public function __construct()
    {
        parent::__construct();
        $this->side1 = 1.0;
        $this->side2 = 1.0;
        $this->side3 = 1.0;
    }
    public function createTriangle($name, $side1, $side2, $side3){
        if($side1>0 && $side2>0 && $side3>0 && $side1+$side2>$side3 && $side1+$side3>$side2 && $side2+$side3>$side1){
            parent::__construct($name);
            $this->side1 = $side1;
            $this->side2 = $side2;
            $this->side3 = $side3;
        }   
    }
    public function getSide1(){
        return $this->side1;
    }
    public function setSide1($new){
        if(is_numeric($new)>0){
            $this->side1 = $new;
        }
        else echo "$new không hợp lệ";
    }
    public function getSide2(){
        return $this->side2;
    }
    public function setSide2($new){
        if(is_numeric($new)>0){
            $this->side2 = $new;
        }
        else echo "$new không hợp lệ";
    }
    public function getSide3(){
        return $this->side3;
    }
    public function setSide3($new){
        if(is_numeric($new)>0){
            $this->side3 = $new;
        }
        else echo "$new không hợp lệ";
    }
    public function getArea(){
          $p = ($this->side1 + $this->side2 + $this->side3)/2;
          $area = sqrt($p * ($p-$this->side1) * ($p-$this->side2) * ($p-$this->side3));
          return $area;
    }
    public function getPerimeter(){
        return $this->side1 + $this->side2 + $this->side3;
    }
    public function toString(){
        return $this->name.' Cạnh a = '.$this->side1.' Cạnh b = '.$this->side2.' cạnh c = '.$this->side3
        .' Diện tích = '.$this->getArea().' Chu vi = '.$this->getPerimeter().'<br><br>';
    }
}

?>