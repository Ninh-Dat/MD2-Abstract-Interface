<?php

class Ciecle
{
 protected $radius;
 protected $nane;

    public function __construct($radius, $nane)
    {
        $this->radius = $radius;
        $this->nane = $nane;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }

    public function getNane()
    {
        return $this->nane;
    }

    public function setNane($nane): void
    {
        $this->nane = $nane;
    }


}