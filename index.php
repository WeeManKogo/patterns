<?php
require 'vendor/autoload.php';

use \Patterns\CreationalDesign\{
  Singleton\Singleton,
  Factory\ShapeFactory,
  Builder\MealBuilder,
};

//SINGLETON-------------------------------------------------------------------------------------------------------------
echo '<pre>';
echo '<h2>Singleton</h2>';

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

var_dump($car, $fiat, $volvo, Car::getInstance(), Fiat::getInstance(), Volvo::getInstance());
//SINGLETON-END---------------------------------------------------------------------------------------------------------

//FACTORY---------------------------------------------------------------------------------------------------------------
echo '<h2>Factory</h2>';
$shapeFactory = new ShapeFactory();

$circle = $shapeFactory->getShape(ShapeFactory::$SHAPE_CIRCLE);
$square = $shapeFactory->getShape(ShapeFactory::$SHAPE_SQUARE);

$circle->draw();
$square->draw();
//FACTORY-END-----------------------------------------------------------------------------------------------------------

//BUILDER---------------------------------------------------------------------------------------------------------------
echo '<h2>Builder</h2>';
$mealBuilder = new MealBuilder();

$vegMeal = $mealBuilder->prepareVegMeal();
$vegMeal->showItems();
print 'Summary cost: ' . $vegMeal->getCost();

echo "<br><br>--------------------------<br>";
$nonVegMeal = $mealBuilder->prepareNonVegMeal();
$nonVegMeal->showItems();
print 'Summary cost: ' . $nonVegMeal->getCost();
//BUILDER-END-----------------------------------------------------------------------------------------------------------
