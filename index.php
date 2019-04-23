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
use Patterns\StructuralDesign\Adapter\AudioPlayer;
use Patterns\StructuralDesign\Adapter\MediaAdapter;

echo '<pre>';
echo '<h2>Creational Design Patterns</h2>';

//SINGLETON-------------------------------------------------------------------------------------------------------------
echo '<h3>Singleton</h3>';

$car = Car::getInstance();
$car->mileage = 100;

$fiat = Fiat::getInstance();
$fiat->mileage = 222;

$volvo = Volvo::getInstance();
$volvo->mileage = 331;

var_dump($car, $fiat, $volvo, Car::getInstance(), Fiat::getInstance(), Volvo::getInstance());
//SINGLETON-END---------------------------------------------------------------------------------------------------------

//FACTORY---------------------------------------------------------------------------------------------------------------
echo '<h3>Factory</h3>';
$shapeFactory = new ShapeFactory();

$circle = $shapeFactory->getShape(ShapeFactory::$SHAPE_CIRCLE);
$square = $shapeFactory->getShape(ShapeFactory::$SHAPE_SQUARE);

$circle->draw();
$square->draw();
//FACTORY-END-----------------------------------------------------------------------------------------------------------

//FACTORY---------------------------------------------------------------------------------------------------------------
echo '<h3>Factory Method</h3>';
$factory = new VolvoFactory();
$car = $factory->createCar();
$car->drive();
//FACTORY-END-----------------------------------------------------------------------------------------------------------

//ABSTRACT-FACTORY------------------------------------------------------------------------------------------------------
echo '<h3>Abstract Factory</h3>';

$afShapeNormalFactory = FactoryProducer::getShapeFactory(FactoryProducer::NORMAL_FACTORY);
$afShapeNormalFactory->createRectangle()->draw();
$afShapeNormalFactory->createTriangle()->draw();

$afShapeRoundedFactory = FactoryProducer::getShapeFactory(FactoryProducer::ROUNDED_FACTORY);
$afShapeRoundedFactory->createRectangle()->draw();
$afShapeRoundedFactory->createTriangle()->draw();

//ABSTRACT-FACTORY-END--------------------------------------------------------------------------------------------------

//BUILDER---------------------------------------------------------------------------------------------------------------
echo '<h3>Builder</h3>';
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
echo '<h3>Prototype</h3>';

ShapeCache::loadCache();

$clonedShape1 = ShapeCache::getShape("1");
var_dump('Shape1: ' . $clonedShape1->getType());

$clonedShape2 = ShapeCache::getShape("2");
var_dump('Shape2: ' . $clonedShape2->getType());

$clonedShape3 = ShapeCache::getShape("3");
var_dump('Shape2: ' . $clonedShape3->getType());
//PROTOTYPE-END---------------------------------------------------------------------------------------------------------

//OBJECT-POOL-----------------------------------------------------------------------------------------------------------
echo '<h3>Object Pool</h3>';
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


echo '<h2>Structural Design Patterns</h2>';

//ADAPTER---------------------------------------------------------------------------------------------------------------
$audioPlayer = new AudioPlayer();
echo "Oryginal audioPlayer:<br>";
$audioPlayer->play(MediaAdapter::MP3_TYPE, 'simple_audio.mp3');

echo "<br>Advanced player adapter:<br>";
$advancedMediaPlayer = new MediaAdapter($audioPlayer);
$advancedMediaPlayer->play(MediaAdapter::MP3_TYPE, 'test.mp3');
$advancedMediaPlayer->play(MediaAdapter::MP4_TYPE, 'test.mp4');
$advancedMediaPlayer->play(MediaAdapter::VLC_TYPE, 'test.vlc');
//ADAPTER-END-----------------------------------------------------------------------------------------------------------
