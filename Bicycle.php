<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    private $is_ligthed = false;


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
        if ($this->currentSpeed > 10){
            $this->switchOn();
            return 'Bike Lights On';
        } else {
            $this->switchOff();
            return 'Bike Lights Off';
        }
    }
}