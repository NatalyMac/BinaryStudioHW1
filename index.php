<?php
use app\Application;
 
$loader = require( __DIR__ . '/vendor/autoload.php' );
 
(new Application())->run();

