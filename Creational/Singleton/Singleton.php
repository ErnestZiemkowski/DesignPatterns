<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 22.01.18
 * Time: 22:41
 */

namespace DesignPatterns\Creational\Singleton;


final class Singleton
{
    /**
     * @var Singleton
     */
    private static $instance;

    /**
     * gets the instance via lazy initialization (created on first usage)
     */
    public static function getInstance(): Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Prevent from calling from outside, if you want to use the instance -> use Singleton::getInstance() instead
     */
    private function __construct()
    {
    }

    /**
     * Prevent from duplicating the instance. There can be only one instance
     */
    private function __clone()
    {
    }

    /**
     * Prevent from beind unserialized => that would create a second instance of it_
     */
    private function __wakeup()
    {
    }
}