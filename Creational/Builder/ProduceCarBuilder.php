<?php

namespace Creational\Builder;


use Creational\Builder\Models\Car;

class ProduceCarBuilder
{
    public $builder;
    public function __construct(CarBuilderInterface $builder)
    {
        $this->builder= $builder;
    }

    public function produceCar():Car
    {
        $this->builder->createCar();
        $this->builder->addBody();
        $this->builder->addEngines();
        $this->builder->addDoors();
        return $this->builder->getCar();
    }

}