<?php
namespace app;

use app\traits\RandomQuote;

class Greeting
{   
    use RandomQuote;
    
    public function say($name)
    {
       echo "Hi, $name! There is a new quote for you: \n";
       $this->sayQoute();
    }
}

