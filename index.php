<?php

class Baddie
{
    public $evilness = 10;
    
    public function __construct() {
        
        echo "A ".__CLASS__." has been created!";
    }
    
}

$ganon = new Baddie;

$scaldera = new Baddie;

//var_dump($ganon);


?>
