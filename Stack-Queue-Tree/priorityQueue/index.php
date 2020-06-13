<?php
include ("Queue.php");

$patients = new Queue;
$patients->enqueue('Smith',5);
$patients->enqueue('Jones',4);
$patients->enqueue('Fehrenbach',6);
$patients->enqueue('Brown',1);
$patients->enqueue('Ingram',1);
echo "<br> Nhập vào 5 bệnh nhân: <br>";
echo $patients->toString();
echo "<br> Khám người đầu tiên: <br>";
echo $patients->dequeue();
echo "<br> Các bệnh nhân còn lại:<br>";
echo $patients->toString();
echo "<br> Khám người thứ 2: <br>";
echo $patients->dequeue();
echo "<br> Các bệnh nhân còn lại:<br>";
echo $patients->toString();
echo "<br> Khám người thứ 3: <br>";
echo $patients->dequeue();
echo "<br> Các bệnh nhân còn lại:<br>";
echo $patients->toString();
echo "<br> Khám người thứ 4: <br>";
echo $patients->dequeue();
echo "<br> Các bệnh nhân còn lại:<br>";
echo $patients->toString();