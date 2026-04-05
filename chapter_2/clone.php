<?php

class Product
{

    public $color;

    public function __construct()
    {
        echo "New product  was crated <br>";
    }

    public function __clone()
    {
        echo "New Product was cloneed <br>";
    }
}

$shirt1 = new Product;
$shirt1->color = "blue";

$shirt2 = clone $shirt1;

echo $shirt1->color;
echo $shirt2->color;

echo "<br>";

$shirt2->color = "Red";

echo $shirt1->color;
echo $shirt2->color;