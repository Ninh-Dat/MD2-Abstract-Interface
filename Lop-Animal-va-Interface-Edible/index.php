<?php
include_once "Tiger.php";
include_once "Chicken.php";
include_once "Apple.php";
include_once "Orange.php";

echo('---- Animals<br>');
$animals1= new Tiger();
$animals2 = new Chicken();
$apple=new Apple();
$orange=new Orange();



echo $animals1->makeSound();
echo "<br>";
echo $animals2->makeSound();
echo $animals2->howToEat();


echo "<br>";
echo $apple->howToEat();
echo "<br>";
echo $orange->howToEat();

//echo('---- Animals
//');
//$animals[0] = new Tiger();
//$animals[1] = new Chicken();
//
//foreach ($animals as $animal) {
//    echo $animal->makeSound() . ' ';
//    if ($animal instanceof Chicken) {
//        echo $animal->howToEat() . ' ';
//    }
//}
?>