<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 15.01.18
 * Time: 23:23
 */

namespace DesignPatterns\Creational\FactoryMethod;


class ItalianFactory extends FactoryMethod
{
    /**
     * @param string $type
     * @return VehicleInterface
     */
    protected function createVehicle(string $type): VehicleInterface
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
            case parent::FAST:
                $carFerrari = new CarFerrari();
                $carFerrari->setColor('purple rose');

                return $carFerrari;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}
