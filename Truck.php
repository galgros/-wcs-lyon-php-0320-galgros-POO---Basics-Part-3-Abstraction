<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    /**
     * @var int
     */
    private $storageCapacity;
    /**
     * @var int
     */
    private $load;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStorageCapacity($storageCapacity);
        $this->load = 0;
    }

    public function start(): string
    {
        return "Started Engine !<br>";
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, Car::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }
    public function setStorageCapacity(int $capacity): Truck
    {
        $this->storageCapacity = $capacity;
        return $this;
    }
    public function getLoad(): int
    {
        return $this->load;
    }
    public function setLoad(int $load): Truck
    {
        if ($load < $this->storageCapacity) {
            $this->load = $load;
        } else {
            $this->load = $this->storageCapacity;
        }
        return $this;
    }
    public function filling(): string
    {
        if ($this->getStorageCapacity() > $this->getLoad()) {
            return 'in filling';
        } else {
            return 'full';
        }
    }
}
