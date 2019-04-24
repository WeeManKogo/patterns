<?php

namespace Patterns\StructuralDesign\Decorator\Shapes;

class Circle implements Shape
{

  public function draw(): void
  {
    print "Circle shape<br>";
  }
}
