<?php

namespace Creational\Builder;

use Creational\Builder\Models\BmwCar;
use Creational\Builder\Models\Car;

class BmwCarBuilder implements CarBuilderInterface
{
    private $type;

    public function createCar()
    {
        $this->type = new BmwCar();
    }

    public function addBody()
    {
        $this->type->setPart('Body','Body');
    }

    public function addDoors()
    {
        $this->type->setPart('addDoors','addDoors');
    }

    public function addEngines()
    {
        $this->type->setPart('addEngines','addEngines');
    }

    public function getCar():Car
    {
        return $this->type;
    }
}