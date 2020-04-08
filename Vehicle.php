<?php

class Vehicle
{
    /**
     * @var string
     */
    protected $color;
    /**
     * @var integer
     */
    protected $currentSpeed;
    /**
     * @var integer
     */
    protected $nbSeat;
    /**
     * @var integer
     */
    protected $nbWheels;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    public function forward()
    {
        $this->currentSpeed = 15;
        return "Go !";
    }
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0){
            $sentence .= "Brake !!!";
            $this->currentSpeed--;
        }
        $sentence .= "<br>I'm stopped";
        return $sentence;
    }

    public function getNbWheels()
    {
        return $this->nbWheels;
    }
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getNbSeat()
    {
        return $this->nbSeat;
    }


}