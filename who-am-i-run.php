<?php
use app\WhoAmI;

$loader = require( __DIR__ . '/vendor/autoload.php' );
$loader->addPsr4( 'app\\', __DIR__ . '/src/' );
(new WhoAmI())->run();