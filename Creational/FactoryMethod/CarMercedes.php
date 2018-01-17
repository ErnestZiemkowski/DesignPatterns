<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 15.01.18
 * Time: 22:36
 */

namespace DesignPatterns\Creational\FactoryMethod;

class CarMercedes implements VehicleInterface
{
    /**
     * @var string
     */
    private $color;

    /**
     * @param string $rgb
     */
    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }

    public function addAmgTunning()
    {
        //do some AMG tunning here
    }
}
