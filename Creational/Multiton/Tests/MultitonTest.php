<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 23.01.18
 * Time: 07:32
 */

namespace DesignPatterns\Creational\Multiton\Tests;

use DesignPatterns\Creational\Multiton\Multiton;
use PHPUnit\Framework\TestCase;

class MultitonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Multiton::getInstance(Multiton::INSTANCE_1);
        $secondCall = Multiton::getInstance(Multiton::INSTANCE_1);

        $this->assertInstanceOf(Multiton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }

    public function testUniquenessForEveryInstance()
    {
        $firstCall = Multiton::getInstance(Multiton::INSTANCE_1);
        $secondCall = Multiton::getInstance(Multiton::INSTANCE_2);

        $this->assertInstanceOf(Multiton::class, $firstCall);
        $this->assertInstanceOf(Multiton::class, $secondCall);
        $this->assertNotSame($firstCall, $secondCall);
    }
}