<?php

namespace Patterns\CreationalDesign\Builder;

class Bottle implements Packing
{

  public function pack(): String
  {
    return 'Bottle';
  }
}