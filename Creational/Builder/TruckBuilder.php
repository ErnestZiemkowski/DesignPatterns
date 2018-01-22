<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 17.01.18
 * Time: 01:23
 */

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

class TruckBuilder implements BuilderInterface
{
    /**
     * @var Parts\Truck
     */
    private $truck;

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Parts\Wheel());
        $this->truck->setPart('wheel2', new Parts\Wheel());
        $this->truck->setPart('wheel3', new Parts\Wheel());
        $this->truck->setPart('wheel4', new Parts\Wheel());
        $this->truck->setPart('wheel5', new Parts\Wheel());
        $this->truck->setPart('wheel6', new Parts\Wheel());
    }

    public function addEngine()
    {
        $this->truck->setPart('engine', new Parts\Engine());
    }

    public function addDoors()
    {
        $this->truck->setPart('DoorFL', new Parts\Door());
        $this->truck->setPart('DoorFR', new Parts\Door());
    }

    public function createVehicle()
    {
        $this->truck = new Parts\Truck();
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}