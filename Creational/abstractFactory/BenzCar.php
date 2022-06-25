<?php
namespace Creational\abstractFactory;


class BenzCar implements CarInterface
{
    private $price;
    private $tax;


    public function __construct($price,$tax)
    {
        $this->price=$price;
        $this->tax=$tax;
    }

    public function calcPrice()
    {
        // TODO: Implement calcPrice() method.
        return $this->price+$this->tax+200000;
    }

}

