<?php
use app\Greeting;

$loader = require( __DIR__ . '/vendor/autoload.php' );
 
(new Greeting())->say('Tom');
