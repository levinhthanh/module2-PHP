<?php

class MoveablePoint  extends Point{
    public $xSpeed;
    public $ySpeed;
    public function __construct($xSpeed = 0.0, $ySpeed = 0.0)
    {
        parent::__construct();
        $this->setXspeed($xSpeed);
        $this->setYspeed($ySpeed);
    }
    public function getXspeed(){
        return $this->xSpeed;
    }
    public function setXspeed($newXspeed){
        if(is_numeric($newXspeed)){
            $this->xSpeed = $newXspeed;
        }
        else echo " Giá trị Xspeed mới không hợp lệ";
    }
    public function getYspeed(){
        return $this->ySpeed;
    }
    public function setYspeed($newYspeed){
        if(is_numeric($newYspeed)){
            $this->ySpeed = $newYspeed;
        }
        else echo " Giá trị Yspeed mới không hợp lệ";
    }
    public function getSpeed(){
        $arrSpeed = array( $this->xSpeed, $this->ySpeed);
        return $arrSpeed;
    }
    public function setSpeed($newXspeed,$newYspeed){
        if(is_numeric($newXspeed)){
            $this->xSpeed = $newXspeed;
        }
        else echo " Giá trị Xspeed mới không hợp lệ";
        if(is_numeric($newYspeed)){
            $this->ySpeed = $newYspeed;
        }
        else echo " Giá trị Yspeed mới không hợp lệ";
    }
    public function toString(){
        return parent::toString()." speed = ($this->xSpeed,$this->ySpeed)";
    }
    public function move(){
        parent::setX(parent::getX() + $this->xSpeed);
        parent::setY(parent::getY() + $this->ySpeed);
    }
}

?>