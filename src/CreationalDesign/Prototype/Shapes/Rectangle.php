<?php

namespace Patterns\CreationalDesign\Prototype\Shapes;

class Rectangle extends ShapePrototype
{

  public function __construct()
  {
    $this->type = 'Rectangle';
  }

  public function draw(): void
  {
    print "Circle shape<br>";
  }

  public function __clone() {}
}
