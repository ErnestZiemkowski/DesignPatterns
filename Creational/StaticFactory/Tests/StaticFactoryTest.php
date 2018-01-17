<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 15.01.18
 * Time: 21:25
 */

namespace DesignPatterns\Creational\StaticFactory\Tests;

use DesignPatterns\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateBooleanFormatter()
    {
        $this->assertInstanceOf(
            'DesignPatterns\Creational\StaticFactory\FormatBoolean',
            StaticFactory::factory('boolean')
        );
    }

    public function testCanCreateDateTimeFormatter()
    {
        $this->assertInstanceOf(
            'DesignPatterns\Creational\StaticFactory\FormatDateTime',
            StaticFactory::factory('datetime')
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testException()
    {
        StaticFactory::factory('string');
    }
}