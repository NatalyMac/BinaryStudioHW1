<?php
use app\Greeting;

$loader = require( __DIR__ . '/vendor/autoload.php' );
$loader->addPsr4( 'app\\', __DIR__ . '/src/' );
 
(new Greeting())->say('Tom');
