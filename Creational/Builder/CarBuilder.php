<?php


namespace DesignPatterns\Creational\Builder;


use DesignPatterns\Creational\Builder\Parts\Vehicle;

class CarBuilder implements BuilderInterface
{
    private $car;

    public function addEngine(): BuilderInterface
    {
        $this->car->setPart('engine', new Parts\Engine());
    }

    public function addWheel(): BuilderInterface
    {
        $this->car->setPart('wheelLF', new Parts\Wheel());
        $this->car->setPart('wheelRF', new Parts\Wheel());
        $this->car->setPart('wheelLR', new Parts\Wheel());
        $this->car->setPart('wheelRR', new Parts\Wheel());
    }

    public function addDoors(): BuilderInterface
    {
        $this->car->setPart('rightDoor', new Parts\Door());
        $this->car->setPart('leftDoor', new Parts\Door());
        $this->car->setPart('trunkLid', new Parts\Door());
    }

    public function createVehicle(): BuilderInterface
    {
        $this->car = new Parts\Car();
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}