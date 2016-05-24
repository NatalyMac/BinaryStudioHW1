<?php
namespace app;

use app\traits\RandomQuote;

class Application
{   
	use RandomQuote;
	public function run()
	{
		  $this->sayQoute();
	}
}
