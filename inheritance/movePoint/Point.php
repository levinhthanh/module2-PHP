<?php
class Point{
    public $x;
    public $y;
    public function __construct($x = 0.0, $y = 0.0){
         $this->setX($x);
         $this->setY($y);
    }
    public function getX(){
        return $this->x;
    }
    public function setX($newX){
        if(is_numeric($newX)){
            $this->x = $newX;
        }
        else echo "Giá trị X mới không hợp lệ";
        
    }
    public function getY(){
        return $this->y;
    }
    public function setY($newY){
        if(is_numeric($newY)){
            $this->y = $newY;
        }
        else echo "Giá trị X mới không hợp lệ";
    }
    public function getXY(){
        $arr = array($this->x,$this->y);
        return $arr;
    }
    public function setXY($newX,$newY){
        $this->x = $newX;
        $this->y = $newY;
    }
    public function toString(){
        return "($this->x,$this->y)";
    }
}
?>