<?php
include 'Point.php';
include 'MoveablePoint.php';

$point = new MoveablePoint;
echo '<br><br>Ban đầu: '.$point->toString();
$point->setX(5.6);
$point->setY(5.6);
echo '<br><br>Set x-y: '.$point->toString();
$point->setXspeed(5.6);
$point->setYspeed(5.6);
echo '<br><br>Set speed: '.$point->toString();
$point->move();
echo '<br><br>Move1: '.$point->toString();
$point->move();
echo '<br><br>Move2: '.$point->toString();

?>