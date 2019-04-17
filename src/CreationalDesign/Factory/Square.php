<?php

namespace Patterns\CreationalDesign\Factory;


class Square implements Shape
{
  public function draw(): void
  {
    echo 'Square' . PHP_EOL;
  }
}