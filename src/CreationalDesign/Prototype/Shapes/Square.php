<?php

namespace Patterns\CreationalDesign\Prototype\Shapes;

class Square extends ShapePrototype
{

  public function __construct()
  {
    $this->type = 'Square';
  }

  public function draw(): void
  {
    print "Square shape<br>";
  }

  public function __clone() {}
}
