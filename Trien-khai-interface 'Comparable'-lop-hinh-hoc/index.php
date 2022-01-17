<?php
include_once "ComparableCircle.php";

$circleOne= new ComparableCircle(2,"hinh tron 1");
$circleTwo= new ComparableCircle(4,"hinh tron 2");
$circleThree= new ComparableCircle(5,"hinh tron 3");


$test = $circleOne->compareTo($circleTwo);
echo('Comparable: <br>');
echo $test;
?>