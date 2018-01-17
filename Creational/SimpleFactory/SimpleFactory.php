<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 10.01.18
 * Time: 07:03
 */

namespace DesignPatterns\Creational\SimpleFactory;

class SimpleFactory
{

    public function createCoffeeMachine(): CoffeeMachine
    {
        return new CoffeeMachine();
    }
}