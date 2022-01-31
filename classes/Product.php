<?php
class Product
{
    protected $name;
    protected $description;
    protected $price;

    function __construct($_name, $_description, $_price)
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
    }
}