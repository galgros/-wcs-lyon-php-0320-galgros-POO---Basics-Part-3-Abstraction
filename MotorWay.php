<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct()
    {
        $this->setNbLane(4);
        $this->setMaxSpeed(130);
    }

    public function addVehicle(object $vehicle)
    {
        // TODO: Implement addVehicle() method.
        if (get_class($vehicle) == 'Truck' ||  get_class($vehicle) == 'Car' )
            $this->setCurrentVehicle(get_class($vehicle));
    }
}
