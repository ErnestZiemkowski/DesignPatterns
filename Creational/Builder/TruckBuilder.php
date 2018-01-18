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
        $this->truck->setPart('wheelRF', new Parts\Wheel());
        $this->truck->setPart('wheelLB', new Parts\Wheel());
        $this->truck->setPart('wheelLF', new Parts\Wheel());
        $this->truck->setPart('wheelRB', new Parts\Wheel());
    }

    public function addEngine()
    {
        $this->truck->setPart('engine', new Parts\Engine());
    }

    public function createVehicle()
    {
        $this->truck = new Parts\Truck();
    }

    public function addDoors()
    {
        $this->truck->setPart('frontLeftDoor', new Parts\Door());
        $this->truck->setPart('frontRightDoor', new Parts\Door());
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}