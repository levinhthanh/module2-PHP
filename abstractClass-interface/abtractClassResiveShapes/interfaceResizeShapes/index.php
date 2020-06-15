<?php

include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
// include_once ('Square.php');
echo "<br><br>---------------------Hình tròn-----------------------<br><br>";

$circle1 = new Circle("Hình tròn 1",10);
$circle2 = new Circle("Hình tròn 2", 15);
$circle3 = new Circle("Hình tròn 3", 8);
$circle4 = new Circle("Hình tròn 4",7);
$circle5 = new Circle("Hình tròn 5", 12);
$circle6 = new Circle("Hình tròn 6", 9);
echo "<br> Mảng chứa diện tích: <br>";
print_r(Circle::$circlesArea);
echo Circle::maxArea();
echo "<br> Mảng chứa chu vi: <br>";
print_r(Circle::$circlesPerimeter);
echo Circle::minPerimeter();
echo "<br> Tìm hình tròn có tên Hình tròn 3: <br>";
echo "=> Hình bạn tìm có bán kính là ".Circle::findShape("Hình tròn 3");
echo "<br> Resize tăng bán kính 10 lần hình tròn có tên Hình tròn 3: <br>";
$circle3->resize(10);
echo "<br> Hình tròn 3 có diện tích mới là: <br>";
echo floor($circle3->getArea());
echo "<br> Hình tròn 3 có diện tích mới là: <br>";
echo floor($circle3->getPerimeter());


echo "<br><br>---------------------Hình trụ-----------------------<br><br>";

$cylinder1 = new Cylinder("Hình trụ 1",10,3);
$cylinder2 = new Cylinder("Hình trụ 2", 15,5);
$cylinder3 = new Cylinder("Hình trụ 3", 8,6);
$cylinder4 = new Cylinder("Hình trụ 4",7,8);
$cylinder5 = new Cylinder("Hình trụ 5", 12,9);
$cylinder6 = new Cylinder("Hình trụ 6", 9,6);
echo "<br> Mảng chứa thể tích: <br>";
print_r(Cylinder::$cylindersVolume);
echo Cylinder::maxVolume();
echo "<br> Tìm hình trụ có tên Hình trụ 4 : <br>";
echo Cylinder::findShape("Hình trụ 4");

echo "<br><br>---------------------Hình chữ nhật-----------------------<br><br>";

$rectangle1 = new Rectangle("Hình chữ nhật 1",10,20);
$rectangle2 = new Rectangle("Hình chữ nhật 2",12,23);
$rectangle3 = new Rectangle("Hình chữ nhật 3",13,24);
$rectangle4 = new Rectangle("Hình chữ nhật 4",15,22);
$rectangle5 = new Rectangle("Hình chữ nhật 5",11,22);
$rectangle6 = new Rectangle("Hình chữ nhật 6",16,28);
echo "<br> Mảng chứa diện tích: <br>";
print_r(Rectangle::$rectanglesArea);
echo Rectangle::maxArea();
echo "<br> Mảng chứa chu vi: <br>";
print_r(Rectangle::$rectanglesPerimeter);
echo Rectangle::minPerimeter();
echo "<br> Tìm hình chữ nhật có tên Hình chữ nhật 5: <br>";
echo Rectangle::findShape("Hình chữ nhật 5");