<?php

namespace Patterns\CreationalDesign\Prototype\Shapes;

class Circle extends ShapePrototype
{

  public function __construct()
  {
    $this->type = 'Circle';
  }

  public function draw(): void
  {
    print "Circle shape<br>";
  }

  public function __clone() {}
}
