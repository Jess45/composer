<?php

require_once __DIR__ .'/../vendor/autoload.php'; // Autoload files using Composer autoload


use App\Wcs\Hello;

$hello = new App\Wcs\Hello();

$newHello = new HelloWorld\SayHello();

echo $hello->talk();

echo $newHello->world();

