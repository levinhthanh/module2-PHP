<?php

include "Circle.php";
include "Comparable.php";

class ComparableCircle extends Circle implements Comparable
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function compareTo($circleOther)
    {
        $circleOtherRadius = $circleOther->getRadius();

        if ($this->getRadius() > $circleOtherRadius) {
            return $this->name." có bán kính lớn hơn ".$circleOther->name;
        }  else if($this->getRadius() < $circleOtherRadius) {
            return $this->name." có bán kính bé hơn ".$circleOther->name;
        } else {
            return $this->name." có bán kính bằng ".$circleOther->name;
        }
    }
}
?>