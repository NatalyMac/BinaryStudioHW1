<?php
namespace app;

use app\Marvel\Atlantida\NamorSubMariner;
use app\Marvel\NewYork\HankPymAntMan;
use app\Marvel\NewJersey\JanetVanDyneWasp;
use app\Marvel\Asgard\Thor;
use app\Marvel\NewYork\IronMan;
use app\Marvel\NewJersey\WonderMan;
use app\Marvel\England\CaptainBritain;
use app\Marvel\Illinois\Beast;

class WhoAmI
{
    public function run()
    {
    	NamorSubMariner::whoami();
    	HankPymAntMan::whoami();
        JanetVanDyneWasp::whoami();
        Thor::whoami();
        IronMan::whoami();
        WonderMan::whoami();
        CaptainBritain::whoami();
        Beast::whoami();
    }

}