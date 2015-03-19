<?php

namespace FantasyStory\Characters;

use FantasyStory\Characters\Knight;

class King extends Knight
{
    private $victories= 0;
    
    function __construct($v, $a, $s, $n) {
        parent::__construct($a, $s, $n);
        $this->setVictories($v);
    }
 
    public function getVictories(){
        return $this->victories;
    }

    public function setVictories($v){

    	$this->victories = $v;
    }
    public function presentHimself(){
    	if($this->victories < 0 ){
            throw new \Exception('Error on the number of victories');
        }

        return "I'm a King and I can count  $this->victories ". ($this->victories>0? "victories ":"victory ")  .  parent::presentHimself();
    }
} 