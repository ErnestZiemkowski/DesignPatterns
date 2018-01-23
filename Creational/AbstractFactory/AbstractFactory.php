<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 23.01.18
 * Time: 22:08
 */

namespace DesignPatterns\Creational\AbstractFactory;


abstract class AbstractFactory
{
    abstract public function createText(string $content): Text;
}
