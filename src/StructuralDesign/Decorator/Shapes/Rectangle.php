<?php

namespace Patterns\StructuralDesign\Decorator\Shapes;

class Rectangle implements Shape
{

  public function draw(): void
  {
    print "Rectangle shape<br>";
  }
}
