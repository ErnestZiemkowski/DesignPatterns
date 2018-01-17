<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 15.01.18
 * Time: 23:08
 */

namespace DesignPatterns\Creational\FactoryMethod;


abstract class FactoryMethod
{
    const CHEAP = 'cheap';
    const FAST = 'fast';

    /**
     * @param string $type
     * @return VehicleInterface
     */
    abstract protected function createVehicle(string $type): VehicleInterface;

    /**
     * @param string $type
     * @return VehicleInterface
     */
    public function create(string $type): VehicleInterface
    {
        $obj = $this->createVehicle($type);
        $obj->setColor('red');

        return $obj;
    }
}
