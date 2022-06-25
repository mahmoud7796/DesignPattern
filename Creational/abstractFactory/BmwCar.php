<?php
namespace Creational\abstractFactory;


class BmwCar implements CarInterface
{
    private $price;

    public function __construct($price)
    {
        $this->price=$price;
    }

    public function calcPrice()
    {
        // TODO: Implement calcPrice() method.
        return $this->price+200000;
    }
}

