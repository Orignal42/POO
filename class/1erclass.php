<?php

class Formule1{

    private $speed=0;
    public function drive(){
               echo "vroom vroom ". $this->speed ."km/h.";
    }
function shiftGear($speed){
    $this->speed=$speed;
}
}