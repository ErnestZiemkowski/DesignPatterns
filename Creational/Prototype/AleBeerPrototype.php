<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 22.01.18
 * Time: 21:59
 */

namespace DesignPatterns\Creational\Prototype;


class AleBeerPrototype extends BeerPrototype
{
    /**
     * @var string
     */
    protected $category = 'Ale';

    public function __clone()
    {
    }
}