<?php

namespace Data;

class Shape
{
    function getCorner(): int 
    {
        return 0;
    }
}

class Rectangle extends Shape
{

    Public function getCorner(): int
    {
        return 4;
    }

    public function getParentCorner(): int
    {
        return parent::getCorner();
    }
}