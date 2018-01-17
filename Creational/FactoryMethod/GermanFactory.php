<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 15.01.18
 * Time: 23:14
 */

namespace DesignPatterns\Creational\FactoryMethod;


class GermanFactory extends FactoryMethod
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
                $carMercedes = new CarMercedes();
                //Mogę wywołać jakieś specyficzne metody odkąd wiem jaką klasę wywołujemy
                $carMercedes->addAmgTunning();
                $carMercedes->setColor('matte black');
                return $carMercedes;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}
