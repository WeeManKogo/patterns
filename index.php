<?php
require 'vendor/autoload.php';
use \Patterns\CreationalDesign\{
  Singleton\Singleton,
  Factory\ShapeFactory,
};

//SINGLETON-------------------------------------------------------------------------------------------------------------
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
echo '<h2>Singleton</h2>';
var_dump($car, $fiat, $volvo, Car::getInstance(), Fiat::getInstance(), Volvo::getInstance());
//SINGLETON-END---------------------------------------------------------------------------------------------------------

//FACTORY---------------------------------------------------------------------------------------------------------------
$shapeFactory = new ShapeFactory();

$circle = $shapeFactory->getShape(ShapeFactory::$SHAPE_CIRCLE);
$square = $shapeFactory->getShape(ShapeFactory::$SHAPE_SQUARE);

echo '<h2>FACTORY</h2>';

$circle->draw();
$square->draw();
//FACTORY-END-----------------------------------------------------------------------------------------------------------