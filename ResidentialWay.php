<?php

require_once 'HighWay.php';

class ResidentialWay extends HighWay
{

        // Properties
        private int $nbLane = 2;
        private int $maxSpeed = 50;
    
    
    
        //Construct
    public function __construct(int $nbLane,int $maxSpeed)
    {
        parent:: __construct($nbLane, $maxSpeed);
    }

        //Method
        public function addVehicle($vehicle)
        {
            if(!($vehicle instanceof Car)){
                return NULL;
            }
    
            return $currentVehicles[$vehicle];
        }

}