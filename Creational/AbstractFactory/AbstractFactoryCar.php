<?php
namespace Creational\AbstractFactory;


class AbstractFactoryCar
{
    private $price;
    private $tax;


    public function __construct($price,$tax)
    {
        $this->price=$price;
        $this->tax=$tax;
    }

    public function createBmw()
    {
        return new BmwCar($this->price);
    }
    public function createBenz()
    {
        return new BenzCar($this->price,$this->tax);
    }
}

