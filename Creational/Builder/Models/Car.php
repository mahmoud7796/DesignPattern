<?php

namespace Creational\Builder\Models;

class Car
{
    private $data = [];

    public function setPart($key,$value)
    {
        $this->data[$key]=$value;
    }
}
