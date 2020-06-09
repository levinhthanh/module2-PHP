<?php

include ('Circle.php');
include ('Cylinder.php');

$circle1 = new Circle(20,'blue');
echo "<br> Circle1 has: radius = $circle1->radius , color = $circle1->color, area = " .$circle1->getArea().'<br>';
$cylinder1 = new Cylinder(20,'red',30);
echo "<br> Cylinder1 has: radius = $cylinder1->radius, color = $cylinder1->color, colume = ".$cylinder1->getColume();
?>