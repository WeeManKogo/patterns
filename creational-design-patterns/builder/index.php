<?php
include 'MealBuilder.php';

$mealBuilder = new \Builder\MealBuilder();

$vegMeal = $mealBuilder->prepareVegMeal();
$vegMeal->showItems();
print 'Summary cost: ' . $vegMeal->getCost();

echo "<br><br>--------------------------<br>";
$nonVegMeal = $mealBuilder->prepareNonVegMeal();
$nonVegMeal->showItems();
print 'Summary cost: ' . $nonVegMeal->getCost();
