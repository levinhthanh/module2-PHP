<?php 
include ('Stack.php');

$stk = new Stack(20);
echo "Thêm 5 phần tử";
$stk->push(1);
$stk->push(2);
$stk->push(3);
$stk->push(4);
$stk->push(5);
var_dump($stk);
echo "<br> Lấy 3 phần tử <br>";
$stk->pop();
$stk->pop();
$stk->pop();
var_dump($stk);
echo "<br> Thêm 2 phần tử <br>";
$stk->push(6);
$stk->push(7);
var_dump($stk);
echo "<br> Kiểm tra rỗng? <br>";
if($stk->isEmpty()){
    echo "<br> Ngăn xếp rỗng <br>";
}else {
    echo "<br> Ngăn xếp không rỗng <br>";
}
echo "<br> Lấy 4 phần tử <br>";
$stk->pop();
$stk->pop();
$stk->pop();
$stk->pop();
echo "<br> Kiểm tra rỗng? <br>";
if($stk->isEmpty()){
    echo "<br> Ngăn xếp rỗng <br>";
}else {
    echo "<br> Ngăn xếp không rỗng <br>";
}
echo "<br> Kiểm tra phần tử trên cùng: <br>";
echo "<br> Phần tử trên cùng là: ".$stk->top();
?>