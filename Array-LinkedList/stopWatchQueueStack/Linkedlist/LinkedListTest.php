<?php

include ('StopWatch.php');
include ('StackUseLinkedList.php');
include ('QueueUseLinkedList.php');
$limitList = 500000;
echo "<br>-----------------------------------Check LinkedList------------------------------------------------<br>";
echo "<br>----------------------------------------Stack-----------------------------------------------------<br>";
$stackLinkedList = new StackLinkedList(5000000);
for($i = 0; $i < $limitList; $i++){
    $stackLinkedList->push(rand(10,100));
}

$searchTime = new StopWatch;
$searchTime->start();
echo "<br>".$stackLinkedList->search(30);
$searchTime->stop();
echo "<br>Thời gian tìm: ".$searchTime->getElapsedTime()." microSecond";

$deleteTime = new StopWatch;
$deleteTime->start();
echo "<br>".$stackLinkedList->delete(90000);
$deleteTime->stop();
echo "<br>Thời gian xóa: ".$deleteTime->getElapsedTime()." microSecond";

$insertTime = new StopWatch;
$insertTime->start();
echo "<br>".$stackLinkedList->insert(90000,60);
$insertTime->stop();
echo "<br>Thời gian chèn: ".$insertTime->getElapsedTime()." microSecond";

echo "<br><br>-----------------------------------------Queue---------------------------------------------<br>";
$queueLinkedList = new QueueLinkedList(5000000);
for($i = 0; $i < $limitList; $i++){
    $queueLinkedList->push(rand(10,100));
}

$searchTime = new StopWatch;
$searchTime->start();
echo "<br>".$queueLinkedList->search(30);
$searchTime->stop();
echo "<br>Thời gian tìm: ".$searchTime->getElapsedTime()." microSecond";

$deleteTime = new StopWatch;
$deleteTime->start();
echo "<br>".$queueLinkedList->delete(90000);
$deleteTime->stop();
echo "<br>Thời gian xóa: ".$deleteTime->getElapsedTime()." microSecond";

$insertTime = new StopWatch;
$insertTime->start();
echo "<br>".$queueLinkedList->insert(90000,60);
$insertTime->stop();
echo "<br>Thời gian chèn: ".$insertTime->getElapsedTime()." microSecond";