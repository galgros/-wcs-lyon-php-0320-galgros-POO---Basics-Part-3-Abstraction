<?php

abstract class HighWay
{
    /**
     * @var array
     */
    protected $currentVehicle = [];
    /**
     * @var integer
     */
    protected $nbLane;
    /**
     * @var integer
     */
    protected $maxSpeed;

    abstract protected function addVehicle(object $vehicle);

    public function setCurrentVehicle(string $vehicle): void
    {
        $this->currentVehicle[] .= $vehicle;
    }
    public function getCurrentVehicle(): array
    {
        return $this->currentVehicle;
    }
    public function setNbLane(int $i): void
    {
        $this->nbLane = $i;
    }
    public function getNbLane(): int
    {
        return $this->nbLane;
    }
    public function setMaxSpeed(int $i): void
    {
        $this->maxSpeed = $i;
    }
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

}