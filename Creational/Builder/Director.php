<?php
/**
 * Created by PhpStorm.
 * User: john-smith
 * Date: 17.01.18
 * Time: 01:38
 */

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

class Director
{
    private $costs;

    public function build(BuilderInterface $builder, BuilderCarInterface $builderCar): Vehicle
    {
        $builder->createVehicle();
        $builder->addEngine();
        $builder->addWheel();
        $builder
    }
}