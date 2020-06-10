<?php

abstract class Animal{
    public function makeSound()
    {

    }
}
class Tiger extends Animal{
    public function makeSound()
    {
        return "Anh la cop";
    }
}
interface Edible {
    public function howToEat();
}
class Chicken extends Animal implements Edible{
    public function makeSound()
    {
        return "Em la ga";
    }
    public function howToEat()
    {
        return "cat tiet, mo bung , nau chin";
    }
}
abstract class Fruit implements Edible{

}
class Apple extends Fruit{
    public function howToEat()
    {
        return "an ngay khi nhin thay";
    }
}
class Orange extends Fruit{
    public function howToEat()
    {
        return "boc vo truoc khi an";
    }
}

$tiger = new Tiger;
echo $tiger->makeSound().'<br>';
$chicken = new Chicken;
echo $chicken->makeSound().'<br>';
echo $chicken->howToEat().'<br>';
$apple = new Apple;
echo $apple->howToEat().'<br>';
$orange = new Orange;
echo $orange->howToEat().'<br>';
?>