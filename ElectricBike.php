<?php

require_once 'RechargeableInterface.php';
require_once 'LightableInterface.php';

class ElectricBike extends Vehicle implements RechargeableInterface
{
    private $charge;


    /**
     * @param int $percentage
     */
    public function charge(int $percentage): int
    {
        return $this->charge = $percentage;
    }

    /**
     * @param int $percentage
     */
    public function Unload(int $percentage): int
    {
       return $this->charge -= $percentage;
    }

    /**
     * @param mixed $charge
     */
    public function setCharge($charge)
    {
        $this->charge = $charge;
    }

    /**
     * @return mixed
     */
    public function getCharge()
    {
        return $this->charge;
    }

}