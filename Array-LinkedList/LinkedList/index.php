<?php
include ('LinkedList.php');
include ('Node.php');

$dataList = new LinkedList;
$dataList->addFirst(15);
$dataList->addFirst(16);
$dataList->addFirst(18);
$dataList->addFirst(19);
echo "<br> Thêm 4 phần tử vào đầu danh sách <br>";
print_r($dataList->printList());
$dataList->addLast(20);
echo "<br> Thêm 1  phần tử 20 vào cuối danh sách <br>";
print_r($dataList->printList());
$dataList->add(2,17);
echo "<br> Chèn 17 vào vị trí có index 2 <br>";
print_r($dataList->printList());
$dataList->add(5,4555);
echo "<br> Chèn 4555 vào vị trí có index 5 <br>";
print_r($dataList->printList());
$dataList->remove(0);
echo "<br> Xóa phần tử đầu tiên <br>";
print_r($dataList->printList());
$dataList->remove(5);
echo "<br> Xóa phần tử cuối cùng <br>";
print_r($dataList->printList());
$dataList->remove(3);
echo "<br> Xóa phần tử có index 3 <br>";
print_r($dataList->printList());
$dataList->removeObj(4555);
echo "<br> Xóa phần tử có giá trị 4555 <br>";
print_r($dataList->printList());
echo "<br> Lấy giá trị có index là 2 <br>";
echo $dataList->get(2);
echo "<br> Lấy độ dài danh sách <br>";
echo $dataList->size();
echo "<br> Clone danh sách sao chép <br>";
print_r($dataList->clone());
echo "<br> Kiểm tra xem có '16' trong danh sách <br>";
if($dataList->contains(16)){
    echo "Có";
}
else {
    echo "Không có";
}
echo "<br> Kiểm tra vị trí có '16' trong danh sách <br>";
echo $dataList->indexOf(16);

