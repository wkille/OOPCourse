<?php

/* class HigherOrLower
{
    public function __construct() {
        
        for($i=0; $i<10; $i++) {
            
            $turn = rand(0, 10);
            echo"$turn<br />";
            ob_flush();
            flush();
            sleep(2);
        }
    }
    
    //if input is up arrow && $i<$i+1 then $i+1 is green
    //else if input is up arrow && $i>$i+1 then $i+1 is red
    //else if input is down arrow && $i<$i+1 then $i+1 is red
    //else if input is down arrow && $i>$i+1 then $i+1 is green
    //else $i+1 is red
    

    
}

$game = new HigherOrLower();

*/

class Number {
    
    public $number;
    
    public function __construct() {
        
        $this->number = rand(1,10);
        
        echo $this->number;
        
        echo "<br />";
        
        ob_flush();
        
        flush();
        
        sleep(1);
        
        unset($this);
        
    }
    
    public function __destruct() {
        
        $number = new Number;
        
        
    }
}

$number = new Number;

?>
