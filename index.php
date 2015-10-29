<?php

class Baddie
{
	public $evilness = 10;
	
	public function sayHi() {
	    
	    echo "Hi!";
	}
	
}

$ganon = new Baddie;

echo $ganon -> sayHi();


?>