<?php

namespace Creational\Builder;

use Creational\Builder\Models\BenzCar;
use Creational\Builder\Models\Car;

class BenzCarBuilder implements CarBuilderInterface
{
    private $type;

    public function createCar()
    {
        $this->type = new BenzCar();
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