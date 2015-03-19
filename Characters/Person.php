<?php

namespace FantasyStory\Characters;

require_once ('Abstracts/PersonAbstract.php'); 
require_once ('Interfaces/CharacterInterface.php'); 

use FantasyStory\Abstracts\PersonAbstract;
use FantasyStory\Interfaces\CharacterInterface;

class Person extends PersonAbstract implements CharacterInterface
{
    public $age;
    public $strength;
}