<?php

namespace Patterns\CreationalDesign\Builder;

class VegBurger extends Burger
{

  public function price(): float
  {
    return 25.0;
  }

  public function name(): String
  {
    return 'Vege Burger';
  }
}