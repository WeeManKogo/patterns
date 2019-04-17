<?php

require 'vendor/autoload.php';
use PHPUnit\Framework\TestSuite;
use PHPUnit\TextUI\TestRunner;
use TestPatterns\CreationalDesign\Singleton\SingletonTest;

$suite = new TestSuite();
$suite->addTestSuite('SingletonTest');

// run the test suite with TextUI_TestRunner
TestRunner::run($suite);

//./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/CreationalDesign/Singleton/SingletonTest.php