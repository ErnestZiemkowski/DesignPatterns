<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 17.01.18
 * Time: 00:39
 */

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Vehicle;

interface BuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function getVehicle(): Vehicle;
}