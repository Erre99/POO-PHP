<?php

require_once('Car.php');

class UberBlack extends Car{
    public $typeCarAcepted;
    public $seatsMaterial;

    public function __construct($license, $driver){
        parent::__construct($license, $driver)
        $this->typeCarAcepted = $typeCarAcepted;
        $this->seatsMaterial = $seatsMaterial;
    }
}
?>