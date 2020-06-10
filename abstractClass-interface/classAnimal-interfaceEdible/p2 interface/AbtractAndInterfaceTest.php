<?php
include('Animals/Chicken.php');
include('Animals/Tiger.php');


echo ('---- Animals<br>');
$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal) {
       echo $animal->makeSound(). ' ';
       if ($animal instanceof Chicken) {
           echo $animal->howToEat(). ' ';
       }
}

include('Fruits/Apple.php');
include('Fruits/Orange.php');


echo ('---- Fruits<br>');

$fruits[0] = new Apple();
$fruits[1] = new Orange();

foreach ($fruits as $fruit) {
    echo $fruit->howToEat() . '<br>';
}
?>