<?php

class Baddie {
    
    private $evilness = 10;
    
    public function getEvilness() {
        
        return $this->evilness;
    }
    
    public function setEvilness($evilness) {
        
        $this->evilness = $evilness;
    }
    
    /*
    public function __destruct() {
        
        echo "You beat the baddie!";
    }
    */
    
}

class Boss extends Baddie {
    
    public function getBaddieEvilness() {
        
        return $this->evilness;
    }
}

$ganon = new Boss;

echo $ganon->getEvilness();