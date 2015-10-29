<?php

class Baddie
{
	public $evilness = 10;
	
	public function makeMoreEvil() {
	    
	    $this->evilness = 20;
	    return $this->evilness;
	}
	
}

$ganon = new Baddie;

echo $ganon -> makeMoreEvil();


?>