<?php

namespace Patterns\StructuralDesign\Decorator;

use Patterns\StructuralDesign\Decorator\Shapes\Shape;

class RedShapeDecorator extends ShapeDecorator
{

  public function draw(): void
  {
    parent::draw();
    $this->setRedBorder($this->shape);
  }

  private function setRedBorder(Shape $shape) {
    print "Added red border to shape";
  }
}
