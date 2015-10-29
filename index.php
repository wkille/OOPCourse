<?php

class Baddie
{
    public $evilness = 10;
    
    public $name;
    
    // __construct is a 'magic method' that happens everytime an object is created
    public function __construct($evilness, $name) {
        
        $this->evilness = $evilness;
        
        $this->name = $name;
        
    }
    
    // __destruct is a 'magic method' that happens everytime an object is destroyed
    public function __destruct() {
        
        echo "A ".__CLASS__." has been destroyed!";
        
    }

    
}

$ganon = new Baddie($evilness=8, $name="Ganon");

//$scaldera = new Baddie($evilness=5, $name="Scaldera");
//$scaldera = new Baddie(5, "Scaldera");


unset($ganon);

//var_dump($ganon);

//var_dump($scaldera);


?>
