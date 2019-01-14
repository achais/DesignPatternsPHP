<?php


namespace DesignPatterns\Creational\Builder;


use DesignPatterns\Creational\Builder\Parts\Vehicle;

class TruckBuilder implements BuilderInterface
{
    private $truck;

    /**
     * 添加发动机
     */
    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Parts\Engine());
    }

    /**
     * 添加轮子
     */
    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Parts\Wheel());
        $this->truck->setPart('wheel2', new Parts\Wheel());
        $this->truck->setPart('wheel3', new Parts\Wheel());
        $this->truck->setPart('wheel4', new Parts\Wheel());
        $this->truck->setPart('wheel5', new Parts\Wheel());
        $this->truck->setPart('wheel6', new Parts\Wheel());
    }

    /**
     * 添加车门
     */
    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Parts\Door());
        $this->truck->setPart('leftDoor', new Parts\Door());
    }

    /**
     * 创建车辆
     */
    public function createVehicle()
    {
        $this->truck = new Parts\Truck();
    }

    /**
     * 获取车辆
     *
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}