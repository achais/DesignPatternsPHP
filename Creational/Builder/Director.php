<?php


namespace DesignPatterns\Creational\Builder;


use DesignPatterns\Creational\Builder\Parts\Vehicle;

class Director
{
    public function build(BuilderInterface $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addEngine();
        $builder->addWheel();
        $builder->addDoors();

        return $builder->getVehicle();
    }
}