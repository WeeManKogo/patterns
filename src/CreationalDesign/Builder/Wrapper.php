<?php

namespace Patterns\CreationalDesign\Builder;

class Wrapper implements Packing
{

  public function pack(): String
  {
    return 'Wrapper';
  }
}