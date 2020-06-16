<?php

include ('StopWatch.php');
include ('StackUseArray.php');
include ('QueueUseArray.php');
$limitList = 500000;
echo "<br>-----------------------------------Check ArrayList------------------------------------------------<br>";
echo "<br>----------------------------------------Stack-----------------------------------------------------<br>";
$stackArrayList = new StackArrayList(5000000);
for($i = 0; $i < $limitList; $i++){
    $stackArrayList->push(rand(10,100));
}

$searchTime = new StopWatch;
$searchTime->start();
echo "<br>".$stackArrayList->search(30);
$searchTime->stop();
echo "<br>Thời gian tìm: ".$searchTime->getElapsedTime()." microSecond";

$deleteTime = new StopWatch;
$deleteTime->start();
echo "<br>".$stackArrayList->delete(90000);
$deleteTime->stop();
echo "<br>Thời gian xóa: ".$deleteTime->getElapsedTime()." microSecond";

$insertTime = new StopWatch;
$insertTime->start();
echo "<br>".$stackArrayList->insert(90000,60);
$insertTime->stop();
echo "<br>Thời gian chèn: ".$insertTime->getElapsedTime()." microSecond";

echo "<br><br>-----------------------------------------Queue---------------------------------------------<br>";
$queueArrayList = new QueueArrayList(5000000);
for($i = 0; $i < $limitList; $i++){
    $queueArrayList->enqueue(rand(10,100));
}

$searchTime->start();
echo "<br>".$queueArrayList->search(30);
$searchTime->stop();
echo "<br>Thời gian tìm: ".$searchTime->getElapsedTime()." microSecond";

$deleteTime->start();
echo "<br>".$queueArrayList->delete(90000);
$deleteTime->stop();
echo "<br>Thời gian xóa: ".$deleteTime->getElapsedTime()." microSecond";

$insertTime->start();
echo "<br>".$queueArrayList->insert(90000,60);
$insertTime->stop();
echo "<br>Thời gian chèn: ".$insertTime->getElapsedTime()." microSecond";

?>