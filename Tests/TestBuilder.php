<?php


use Creational\Builder\BenzCarBuilder;
use Creational\Builder\BmwCarBuilder;
use Creational\Builder\Models\BenzCar;
use Creational\Builder\Models\BmwCar;
use Creational\Builder\ProduceCarBuilder;
use PHPUnit\Framework\TestCase;

class TestBuilder extends TestCase
{
    public function testBmwCarBuilder()
    {
        $bmwBuilder= new BmwCarBuilder();
        $carProducer = new ProduceCarBuilder($bmwBuilder);
        $myCar= $carProducer->produceCar();
        $this->assertInstanceOf(BmwCar::class,$myCar);
    }

    public function testBenzCarBuilder()
    {
        $benzCarBuild = new BenzCarBuilder();
        $createCar = new ProduceCarBuilder($benzCarBuild);
        $car = $createCar->produceCar();
        $this->assertInstanceOf(BenzCar::class,$car);
    }

}