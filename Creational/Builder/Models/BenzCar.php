<?php

namespace Creational\Builder\Models;

class BenzCar extends Car
{
    private $data = [];

    public function setPart($key,$value)
    {
        $this->data[$key]=$value;
    }

}