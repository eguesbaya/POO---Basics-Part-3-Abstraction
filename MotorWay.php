<?php
require_once 'HighWay.php';

class MotorWay extends HighWay
{

    // Properties
    
    private int $nbLane = 4;
    private int $maxSpeed = 130;



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