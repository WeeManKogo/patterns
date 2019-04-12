<?php

namespace Shape;

interface Shape
{
  public function draw(): void;
}

class Circle implements Shape
{
  public function draw(): void
  {
    echo 'Circle' . PHP_EOL;
  }
}

class Square implements Shape
{
  public function draw(): void
  {
    echo 'Square' . PHP_EOL;
  }
}
