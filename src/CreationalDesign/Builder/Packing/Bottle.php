<?php

namespace Patterns\CreationalDesign\Builder\Packing;

class Bottle implements Packing
{

  public function pack(): String
  {
    return 'Bottle';
  }
}