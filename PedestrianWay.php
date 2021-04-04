<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
        // Properties
        
        private int $nbLane = 1;
        private int $maxSpeed = 10;
    
    
    
        //Construct

    public function __construct(int $nbLane,int $maxSpeed)
    {
        parent:: __construct($nbLane, $maxSpeed);
    }

        //Method
    //Method
    public function addVehicle($vehicle)
    {
        if(!($vehicle instanceof Bike) || !($vehicle instanceof Skateboard)){
            return NULL;
        }

        return $this->setCurrentVehicles[$vehicle];
    }

}
