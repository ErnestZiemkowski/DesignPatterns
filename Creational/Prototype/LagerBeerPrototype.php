<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 22.01.18
 * Time: 22:00
 */

namespace DesignPatterns\Creational\Prototype;


class LagerBeerPrototype extends BeerPrototype
{
    /**
     * @var string
     */
    protected $category = 'Lager';

    public function __clone()
    {
    }
}