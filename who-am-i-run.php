<?php
use app\WhoAmI;

$loader = require( __DIR__ . '/vendor/autoload.php' );
(new WhoAmI())->run();