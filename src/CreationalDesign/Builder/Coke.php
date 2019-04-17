<?php

namespace Patterns\CreationalDesign\Builder;

class Coke extends ColdDrink
{

  public function price(): float
  {
    return 5.99;
  }

  public function name(): String
  {
    return 'Coke';
  }
}