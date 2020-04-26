<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'gaz',
        'electric',
    ];

    /**
     * @var bool
     */
    private $is_ligthed = false;
    /**
     * @var string
     */
    private $energy;
    /**
     * @var int
     */
    private $energyLevel;
    /**
     * @var bool
     */
    private $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }
    public function start()
    {
        if ($this->hasParkBrake === true) {
            throw new Exception('Park break on');
        }
        return "Started Engine !<br>";
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
        }
        return $this;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function setParkBrake(bool $hasParkBrake): void
    {
        if ($hasParkBrake)
            $this->hasParkBrake = true;
        else
            $this->hasParkBrake = false;
    }

    public function switchOn(): bool
    {
        return $this->is_ligthed = true;
    }

    public function switchOff(): bool
    {
        return $this->is_ligthed = false;
    }

    /**
     * @return bool
     */
    public function isIsLigthed()
    {
        if ($this->is_ligthed == false)
            return 'Car Lights Off';
        else
            return 'Car Lights On';
    }
}