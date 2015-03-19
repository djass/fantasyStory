<?php

namespace FantasyStory\Characters;

use FantasyStory\Characters\Person;

class Knight extends Person
{
    private $name = "";

    function __construct($n, $a, $s) {
        parent::__construct($a,$s);
        $this->setName($n);
    }

    public function setName($n){
    	$this->name = ucfirst ($n);
    }

    public function getName(){
        return $this->name;
    }

    public function presentHimself(){
    	if($this->name == ""){
            throw new \Exception('Name of Knight unknow');
        }

        return "I'm a knight and my name is $this->name. " . parent::presentHimself();
        
    }
} 