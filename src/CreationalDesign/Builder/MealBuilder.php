<?php

namespace Patterns\CreationalDesign\Builder;

use Patterns\CreationalDesign\Builder\Burgers\{
  VegBurger,
  ChickenBurger,
};

use Patterns\CreationalDesign\Builder\Drinks\{
  Coke,
  Pepsi,
};

class MealBuilder
{

  public function prepareVegMeal(): Meal
  {
    $meal = new Meal();
    $meal->addItem(new VegBurger());
    $meal->addItem(new Coke());
    return $meal;
  }

  public function prepareNonVegMeal(): Meal
  {
    $meal = new Meal();
    $meal->addItem(new ChickenBurger());
    $meal->addItem(new Pepsi());
    return $meal;
  }
}