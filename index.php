<?php

class Baddie
{
    public $evilness = 10;
    
    public function evilUpTo15() {
        
        $this-> evilness = 15;
    }
    
    public function evilUpTo20() {
        
        $this-> evilness = 20;
    }
    
    
}

$hugrot = new Baddie;
    
$shaboo = new Baddie;

$hugrot-> evilUpTo15();

$shaboo-> evilUpTo20();

var_dump($hugrot);

var_dump($shaboo);





?>