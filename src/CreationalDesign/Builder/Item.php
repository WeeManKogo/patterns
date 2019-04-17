<?php

namespace Patterns\CreationalDesign\Builder;

use Patterns\CreationalDesign\Builder\Packing\Packing;

interface Item
{
  public function name(): String;
  public function packing(): Packing;
  public function price(): float;
}