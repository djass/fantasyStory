<?php

namespace FantasyStory\Story;

class Story {
	
	public $introductionText;
	public $characters;

    function __construct($introductionText = "An Appturbo production") {
        $this->introductionText = $introductionText; 
    } 

    function tellTheStory(){ 
        $story = $this->getIntroductionText();
        if(!empty($this->characters)){
            $presentationOfEveryCharacter = "";
            foreach ($this->characters as $key => $value) {
                $story .= " ".$value->presentHimSelf();
            }

        }
        else{
            $story = "This story cannot be told without characters";
        }
        
        return $story;
    }

    function getIntroductionText(){
        return $this->introductionText;
    }

	function setCharacters($characters_tab){
        foreach ($characters_tab as $key => $value) 
            if(current(class_implements($value)) != "FantasyStory\Interfaces\CharacterInterface"){
		    	throw new \Exception('The is a intruder with the interface '.get_declared_interfaces($value));
			}
		$this->characters = $characters_tab;
    }
  
}