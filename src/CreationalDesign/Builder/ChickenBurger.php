<?php

namespace Patterns\CreationalDesign\Builder;

class ChickenBurger extends Burger
{

  public function price(): float
  {
    return 22.99;
  }

  public function name(): String
  {
    return 'Chicken Burger';
  }
}