<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 15.01.18
 * Time: 23:33
 */

namespace DesignPatterns\Creational\FactoryMethod\Tests;


use DesignPatterns\Creational\FactoryMethod\Bicycle;
use DesignPatterns\Creational\FactoryMethod\CarFerrari;
use DesignPatterns\Creational\FactoryMethod\CarMercedes;
use DesignPatterns\Creational\FactoryMethod\FactoryMethod;
use DesignPatterns\Creational\FactoryMethod\GermanFactory;
use DesignPatterns\Creational\FactoryMethod\ItalianFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{

    public function testCanCreateCheapVehicleFromGermanFactory()
    {
        $factory = new GermanFactory();
        $result = $factory->create(FactoryMethod::CHEAP);

        $this->assertInstanceOf(Bicycle::class, $result);
    }

    public function testCanCreateFastVehicleFromGermanFactory()
    {
        $factory = new GermanFactory();
        $result = $factory->create(FactoryMethod::FAST);

        $this->assertInstanceOf(CarMercedes::class, $result);
    }

    public function testCanCreateCheapVehicleFromItalianFactory()
    {
        $factory = new ItalianFactory();
        $result = $factory->create(FactoryMethod::CHEAP);

        $this->assertInstanceOf(Bicycle::class, $result);
    }

    public function testCanCreateFastVehicleFromItalianFactory()
    {
        $factory = new ItalianFactory();
        $result = $factory->create(FactoryMethod::FAST);

        $this->assertInstanceOf(CarFerrari::class, $result);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Rolls Royce is not a valid vehicle
     */
    public function testException()
    {
        $factory = new ItalianFactory();
        $factory->create('Rolls Royce');
    }
}
