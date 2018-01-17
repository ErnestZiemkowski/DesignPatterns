<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 10.01.18
 * Time: 07:26
 */

namespace DesignPatterns\Creational\SimpleFactory;

use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateCoffeeMachine()
    {
        $coffeeMachine = (new SimpleFactory())->createCoffeeMachine();
        $this->assertInstanceOf(CoffeeMachine::class, $coffeeMachine);
    }
}