<?php

namespace Patterns\CreationalDesign\Factory;

class Circle implements Shape
{
  public function draw(): void
  {
    echo 'Circle' . PHP_EOL;
  }
}