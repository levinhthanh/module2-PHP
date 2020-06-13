<?php 

include ('Queue.php');

$queue1 = new Queue;
echo "<br> Kiểm tra hàng đợi sau khi khởi tạo: <br>";
if($queue1->isEmpty()){
    echo"<br> Hàng đợi rỗng <br>";
}
else{
    echo "<br> Hàng đợi có giá trị <br>";
}
echo "<br> Nhập vào 3 phần tử 15 16 17 <br>";
$queue1->enqueue(15);
$queue1->enqueue(16);
$queue1->enqueue(17);
print_r($queue1->printQueue());
echo "<br> Lấy ra 2 phần tử <br>";
echo "<br>".$queue1->dequeue()."<br>";
echo "<br>".$queue1->dequeue()."<br>";
echo "<br> Còn lại: <br>";
print_r($queue1->printQueue());
echo "<br> Kiểm tra rỗng? <br>";
if($queue1->isEmpty()){
    echo"<br> Hàng đợi rỗng <br>";
}
else{
    echo "<br> Hàng đợi có $queue1->count giá trị <br>";
}
echo "<br> Nhập vào 2 phần tử 18 19 <br>";
$queue1->enqueue(18);
$queue1->enqueue(19);
print_r($queue1->printQueue());
echo "<br> Lấy ra 3 phần tử <br>";
echo "<br>".$queue1->dequeue()."<br>";
echo "<br>".$queue1->dequeue()."<br>";
echo "<br>".$queue1->dequeue()."<br>";
echo "<br> Kiểm tra rỗng? <br>";
if($queue1->isEmpty()){
    echo"<br> Hàng đợi rỗng <br>";
}
else{
    echo "<br> Hàng đợi có $queue1->count giá trị <br>";
}
?>