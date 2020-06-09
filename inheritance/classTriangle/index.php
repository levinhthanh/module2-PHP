<?php

include 'Shape.php';
include 'Triangle.php';

$tamgiac1 = new Triangle;
echo $tamgiac1->toString();

$tamgiac2 = new Triangle;
$tamgiac2->createTriangle('Tam giác', 2,3,4);
echo $tamgiac2->toString();

?>