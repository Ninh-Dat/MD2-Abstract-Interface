<?php
include_once "Ciecle.php";
include_once "Comparable.php";
class ComparableCircle extends Ciecle implements Comparable
{

    public function compareTo($objTwo)
    {
        // TODO: Implement compareTo() method.

        $circleTwoRadius = $objTwo->getRadius();

        if ($this->getRadius() > $circleTwoRadius) {
            return 1;
        } else if ($this->getRadius() < $circleTwoRadius) {
            return -1;
        } else {
            return 0;
        }

    }
}