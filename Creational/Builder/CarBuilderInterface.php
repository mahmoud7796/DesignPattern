<?php

namespace Creational\Builder;
use Creational\Builder\Models\Car;

interface CarBuilderInterface
{
    public function createCar();
    public function addBody();
    public function addDoors();
    public function addEngines();
    public function getCar():Car;
}
