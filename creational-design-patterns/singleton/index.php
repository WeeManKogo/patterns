<?php

use Singleton\Singleton;

include 'Singleton.php';

class Car extends Singleton {
    
    public $mileage = 0;
}

class Fiat extends Car {
    
}

class Volvo extends Car {
    
}

$car = Car::getInstance();
$car->mileage = 100;

$fiat = Fiat::getInstance();
$fiat->mileage = 222;

$volvo = Volvo::getInstance();
$volvo->mileage = 331;

echo '<pre>'; 
var_dump($car, $fiat, $volvo, Car::getInstance(), Fiat::getInstance(), Volvo::getInstance());