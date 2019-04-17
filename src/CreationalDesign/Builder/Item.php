<?php

namespace Patterns\CreationalDesign\Builder;

interface Item
{
  public function name(): String;
  public function packing(): Packing;
  public function price(): float;
}