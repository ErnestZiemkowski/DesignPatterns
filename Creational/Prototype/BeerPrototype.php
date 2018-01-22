<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 22.01.18
 * Time: 21:59
 */

namespace DesignPatterns\Creational\Prototype;


abstract class BeerPrototype
{
    /**
     * @var string
     */
    protected $color;

    /**
     * @var string
     */
    protected $category;

    abstract public function __clone();

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
}