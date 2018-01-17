<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 17.01.18
 * Time: 00:41
 */

namespace DesignPatterns\Creational\Builder\Parts;


abstract class Vehicle
{
    /**
     * @var object[]
     */
    private $data = [];

    /**
     * @param $key
     * @param $value
     */
    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}