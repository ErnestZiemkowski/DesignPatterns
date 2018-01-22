<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 22.01.18
 * Time: 22:08
 */

namespace DesignPatterns\Creational\Prototype\Tests;

use DesignPatterns\Creational\Prototype\AleBeerPrototype;
use DesignPatterns\Creational\Prototype\LagerBeerPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanGetAleLagerBeer()
    {
        $lagerPrototype = new LagerBeerPrototype();
        $alePrototype = new AleBeerPrototype();

        for ($i = 0; $i < 10; $i++) {
            $beer = clone $lagerPrototype;
            $beer->setColor('Lager Beer no ' . $i);
            $this->assertInstanceOf(LagerBeerPrototype::class, $beer);
        }

        for ($i = 0; $i < 15; $i++) {
            $beer = clone $alePrototype;
            $beer->setColor('Ale Beer no ' . $i);
            $this->assertInstanceOf(AleBeerPrototype::class, $beer);
        }
    }
}