<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 17.01.18
 * Time: 01:23
 */

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

class BikeBuilder implements BuilderInterface
{
    /**
     * @var Parts\Bike
     */
    private $bike;

    public function addWheel()
    {
        $this->bike->setPart('frontWheel', new Parts\Wheel());
        $this->bike->setPart('backWheel', new Parts\Wheel());
    }

    public function addEngine()
    {
        $this->bike->setPart('engine', new Parts\Engine());
    }

    public function createVehicle()
    {
        $this->bike = new Parts\Bike();
    }

    public function getVehicle(): Vehicle
    {
        return $this->bike;
    }
}