<?php

use Map;


class Geolocation{
    
    private $map;

    function __construct(Map $map) {
        $this->map = $map;
     }

     public function search($name)
     {
         $location =  $this->map->findaddress($name);
         return $location;
     }
}