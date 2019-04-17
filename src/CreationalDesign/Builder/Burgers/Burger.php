<?php

namespace Patterns\CreationalDesign\Builder\Burgers;

use Patterns\CreationalDesign\Builder\Item;
use Patterns\CreationalDesign\Builder\Packing\{
  Packing,
  Wrapper,
};

abstract class Burger implements Item
{

  public function packing(): Packing
  {
    return new Wrapper();
  }

  public abstract function price(): float;
}