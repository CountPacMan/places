<?php

class Place {
    private $place_name;

    function __construct($place_name) {
        $this->place_name = $place_name;
    }

    function getPlace() {
        return $this->place_name;
    }

    function setPlace($place_name) {
        $this->place_name = $place_name;
    }

    
}
