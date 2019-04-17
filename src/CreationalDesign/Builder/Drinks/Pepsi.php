<?php

namespace Patterns\CreationalDesign\Builder\Drinks;

class Pepsi extends ColdDrink
{

  public function price(): float
  {
    return 4.99;
  }

  public function name(): String
  {
    return 'Pepsi';
  }
}