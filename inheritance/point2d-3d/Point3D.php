<?php
class Point3D extends Point2D{
    public $z;
    public function __construct($x,$y,$z)
    {
        parent::__construct($x,$y);
        $this->z = (float)$z;
    }
    public function getZ(){
        return $this->z;
    }
    public function setZ($newZ){
         $this->z = (float) $newZ;
    }
    public function getXYZ(){
        $arr= array($this->x,$this->y,$this->z);
        return $arr;
    }
    public function setXYZ($newX,$newY,$newZ){
        $this->x = $newX;
        $this->y = $newY;
        $this->z = $newZ;
    }
    public function toString(){
        return "($this->x,$this->y,$this->z)";
    }
}

?>