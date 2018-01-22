<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 17.01.18
 * Time: 00:54
 */

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

class CarBuilder implements BuilderInterface
{
    /**
     * @var Parts\Car
     */
    private $car;

    public function addDoors()
    {
        $this->car->setPart('frontLeftDoor', new Parts\Door());
        $this->car->setPart('frontRightDoor', new Parts\Door());
        $this->car->setPart('backLeftDoor', new Parts\Door());
        $this->car->setPart('backRightDoor', new Parts\Door());
        $this->car->setPart('trunkLid', new Parts\Door());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Parts\Engine());
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Parts\Wheel());
        $this->car->setPart('wheelRF', new Parts\Wheel());
        $this->car->setPart('wheelLB', new Parts\Wheel());
        $this->car->setPart('wheelRB', new Parts\Wheel());
    }

    public function createVehicle()
    {
        $this->car = new Parts\Car();
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}