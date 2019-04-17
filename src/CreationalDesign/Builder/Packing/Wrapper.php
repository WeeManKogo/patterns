<?php

namespace Patterns\CreationalDesign\Builder\Packing;

class Wrapper implements Packing
{

  public function pack(): String
  {
    return 'Wrapper';
  }
}