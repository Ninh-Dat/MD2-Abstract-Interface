<?php
include_once "Animal.php";
include_once "Edible.php";
 class Chicken extends Animal implements Edible
{

     public function makeSound()
     {
         // TODO: Implement makeSound() method.
         return "Chicken: cục ta cục tác, ";
     }

     public function howToEat()
     {
         // TODO: Implement howToEat() method.
         return " Luộc lên chấm muối chanh ngon tuyệt";
     }
 }