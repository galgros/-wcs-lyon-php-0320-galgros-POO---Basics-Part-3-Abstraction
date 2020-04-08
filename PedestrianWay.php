<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        $this->setNbLane(1);
        $this->setMaxSpeed(10);
    }

    public function addVehicle(object $vehicle)
    {
        // TODO: Implement addVehicle() method.
        if (get_class($vehicle) == 'Bicycle' || get_class($vehicle) == 'Skateboard')
            $this->setCurrentVehicle(get_class($vehicle));
    }
}