<?php

namespace FantasyStory\Abstracts;

abstract class personAbstract 
{
    public $age;
    public $strength;

    // méthode commune
    public function presentHimself(){
        return  "I'm $this->age years old. I have $this->strength strength.";
    }

    function __construct($a, $s) {
        $this->age = $a; 
        $this->strength = $s; 
    }

    public function getAge(){
        return $this->age;
    }

    public function getStrength(){
        return $this->strength;
    }


}