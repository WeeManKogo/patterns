<?php

namespace Patterns\CreationalDesign\Builder;

abstract class ColdDrink implements Item
{

  public function packing(): Packing
  {
    return new Bottle();
  }

  public abstract function price(): float;
}