<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:17
 */
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');


// $circle = new Circle('Circle 01', 3);
// echo 'Circle area: ' . $circle->calculateArea() . '<br />';
// echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

// $cylinder = new Cylinder('Cylinder 01', 3 , 4);
// echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
// echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

// $rectangle = new Rectangle('Rectangle 01', 3 , 4);
// echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
// echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

// $square = new Square('Square 01', 4);
// echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
// echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';

$shape = [new Circle('CirclePro', 5) , new Rectangle('RectPro',4,6) , new Square('SquarePro',4)];
for($i=0 ; $i<3 ; $i++){
    echo "<br> Diện tích ".$shape[$i]->name." bằng ".$shape[$i]->calculateArea().'<br>';
    echo "<br> Chu vi ".$shape[$i]->name." bằng ".$shape[$i]->calculatePerimeter().'<br>';
    if($shape[$i]->name === 'SquarePro'){
        $shape[$i]->howToColor();  
    }
}
