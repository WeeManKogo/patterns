<?php
require 'vendor/autoload.php';

use Patterns\CreationalDesign\{
  Prototype\ShapeCache,
  Singleton\Examples\Car,
  Singleton\Examples\Fiat,
  Singleton\Examples\Volvo,
  Factory\ShapeFactory,
  FactoryMethod\VolvoFactory,
  AbstractFactory\FactoryProducer,
  Builder\MealBuilder,
  ObjectPool\WorkerPool,
};

//SINGLETON-------------------------------------------------------------------------------------------------------------
echo '<pre>';
echo '<h2>Singleton</h2>';

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

//FACTORY---------------------------------------------------------------------------------------------------------------
echo '<h2>Factory Method</h2>';
$factory = new VolvoFactory();
$car = $factory->createCar();
$car->drive();
//FACTORY-END-----------------------------------------------------------------------------------------------------------

//ABSTRACT-FACTORY------------------------------------------------------------------------------------------------------
echo '<h2>Abstract Factory</h2>';

$afShapeNormalFactory = FactoryProducer::getShapeFactory(FactoryProducer::NORMAL_FACTORY);
$afShapeNormalFactory->createRectangle()->draw();
$afShapeNormalFactory->createTriangle()->draw();

$afShapeRoundedFactory = FactoryProducer::getShapeFactory(FactoryProducer::ROUNDED_FACTORY);
$afShapeRoundedFactory->createRectangle()->draw();
$afShapeRoundedFactory->createTriangle()->draw();

//ABSTRACT-FACTORY-END--------------------------------------------------------------------------------------------------

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

//PROTOTYPE-------------------------------------------------------------------------------------------------------------
echo '<h2>Prototype</h2>';

ShapeCache::loadCache();

$clonedShape1 = ShapeCache::getShape("1");
var_dump('Shape1: ' . $clonedShape1->getType());

$clonedShape2 = ShapeCache::getShape("2");
var_dump('Shape2: ' . $clonedShape2->getType());

$clonedShape3 = ShapeCache::getShape("3");
var_dump('Shape2: ' . $clonedShape3->getType());
//PROTOTYPE-END---------------------------------------------------------------------------------------------------------

//OBJECT-POOL-----------------------------------------------------------------------------------------------------------
echo '<h2>Object Pool</h2>';
$pool = new WorkerPool();

$worker1 = $pool->getWorker();
$worker2 = $pool->getWorker();

var_dump($worker1->getId(), $worker1->getName(), $worker1->getCurrentWorkInfo(), '-----');
var_dump($worker2->getId(), $worker2->getName(), $worker2->getCurrentWorkInfo(), '-----');

$pool->release($worker1);

$worker3 = $pool->getWorker();
var_dump($worker3->getId(), $worker3->getName(), $worker3->getCurrentWorkInfo(), '-----');
var_dump($pool);
//OBJECT-POOL-END-------------------------------------------------------------------------------------------------------
