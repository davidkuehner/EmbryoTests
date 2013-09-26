<?php

namespace {

require_once dirname(dirname(__DIR__)) .
             DIRECTORY_SEPARATOR . 'Data' .
             DIRECTORY_SEPARATOR . 'Core.link.php';

from('Hoathis')
->import('First');

$myFirstLib = new Hoathis\First();

//echo "Hello you! I'm your first Hoa-based application \o/.\n"; 

//$myFirstLib->beNice();
$myFirstLib->showImage();


}
