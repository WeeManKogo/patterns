<?php

namespace Patterns\StructuralDesign\Decorator;

use Patterns\StructuralDesign\Decorator\Shapes\Shape;

abstract class ShapeDecorator implements Shape
{
  /**
   * @var $shape Shape
   */
  protected $shape;

  /**
   * ShapeDecorator constructor.
   * @param Shape $shape
   */
  public function __construct(Shape $shape)
  {
    $this->shape = $shape;
  }

  public function draw(): void
  {
    $this->shape->draw();
  }

}
