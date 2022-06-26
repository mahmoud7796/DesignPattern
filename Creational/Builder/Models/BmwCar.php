<?php

namespace Creational\Builder\Models;

class BmwCar extends Car
{

    private $data = [];

    public function setPart($key,$value)
    {
        $this->data[$key]=$value;
    }

}