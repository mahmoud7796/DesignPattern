<?php


use Creational\AbstractFactory\AbstractFactoryCar;
use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BmwCar;
use PHPUnit\Framework\TestCase;

class TestAbstractFactory extends TestCase
{
    public function testBmwCarObject()
    {
        $abstractFactory = new AbstractFactoryCar(20000,9000);
        $bmwObj= $abstractFactory->createBmw();
        $this->assertInstanceOf(BmwCar::class,$bmwObj);
    }

    public function testBenzCarObject()
    {
        $abstractFactory = new AbstractFactoryCar(250000,9000);
        $benzObj= $abstractFactory->createBenz();
        $this->assertInstanceOf(BenzCar::class,$benzObj);
    }

}