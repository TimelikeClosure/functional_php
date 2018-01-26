<?php
// test class autoloading

// setup class autoloading
require(__DIR__ . '/../Application/Autoload/Loader.php');

// add current directory to the path
Application\Autoload\Loader::init(__DIR__ . '/..');

// get "test" class
$test = new Application\Test\TestClass();
echo $test->getTest();

// get "fake" class
$fake = new Application\Test\FakeClass();
echo $fake->getTest();
