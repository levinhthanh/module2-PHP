<?php
include ('Dancer.php');

$queueMale = new SplQueue;
$queueFemale = new SplQueue;
echo "<br> Ban đầu: <br>";
comeWithMe($queueMale, $queueFemale);
echo "<br> Thêm vào 4 dancers nam: <br>";
$dancer1 = new Dancer('Thành',"nam");
$queueMale->enqueue($dancer1);
$dancer2 = new Dancer('Đạt',"nam");
$queueMale->enqueue($dancer2);
$dancer3 = new Dancer('Thạnh',"nam");
$queueMale->enqueue($dancer3);
$dancer4 = new Dancer('Lân',"nam");
$queueMale->enqueue($dancer4);
comeWithMe($queueMale, $queueFemale);
echo "<br> Thêm vào 3 dancers nữ: <br>";
$dancer5 = new Dancer('Thanh',"nữ");
$queueFemale->enqueue($dancer5);
$dancer6 = new Dancer('Hiệp',"nữ");
$queueFemale->enqueue($dancer6);
$dancer7 = new Dancer('Đức',"nữ");
$queueFemale->enqueue($dancer7);
while(!$queueMale->isEmpty() && !$queueFemale->isEmpty()){
    comeWithMe($queueMale, $queueFemale);
}



function comeWithMe($queueMale, $queueFemale){
     if( $queueMale->isEmpty() || $queueFemale->isEmpty()){
          echo "<br>=> Chưa thể ghép đôi <br>";
     }
     else{
         $member1 = $queueMale->dequeue();
         $member2 = $queueFemale->dequeue();
         echo "<br>=> $member1->name được ghép đôi với $member2->name <br>";
     }
}

?>