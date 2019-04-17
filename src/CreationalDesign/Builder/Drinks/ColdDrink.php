<?php

namespace Patterns\CreationalDesign\Builder\Drinks;

use Patterns\CreationalDesign\Builder\Item;
use Patterns\CreationalDesign\Builder\Packing\{
  Packing,
  Bottle,
};

abstract class ColdDrink implements Item
{

  public function packing(): Packing
  {
    return new Bottle();
  }

  public abstract function price(): float;
}