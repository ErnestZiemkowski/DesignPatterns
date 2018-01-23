<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 23.01.18
 * Time: 07:26
 */

namespace DesignPatterns\Creational\Multiton;


final class Multiton
{
    const INSTANCE_1 = '1';
    const INSTANCE_2 = '2';

    /**
     * @var Multiton[]
     */
    private static $instances = [];

    /**
     * Multiton constructor.
     *
     * This is private to prevent from creating arbitary instances
     */
    private function __construct()
    {
    }

    public static function getInstance(string $instanceName): Multiton
    {
        if (!isset(self::$instances[$instanceName])) {
            self::$instances[$instanceName] = new self();
        }

        return self::$instances[$instanceName];
    }

    /**
     * prevent instance from being cloned
     */
    private function __clone()
    {
    }

    /**
     * prevent instance from being unserialized
     */
    private function __wakeup()
    {
    }
}