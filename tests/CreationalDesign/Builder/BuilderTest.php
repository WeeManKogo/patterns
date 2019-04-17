<?php

namespace TestPatterns\CreationalDesign\Builder;

use Patterns\CreationalDesign\Builder\MealBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{

  public function testChickenBurgerCost()
  {
    $mealBuilder = new MealBuilder();
    $meal = $mealBuilder->prepareNonVegMeal();
    $this->assertEqualsWithDelta(27.98, $meal->getCost(), 0.0001);
  }
}