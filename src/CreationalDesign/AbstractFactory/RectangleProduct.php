<?php

namespace Patterns\CreationalDesign\AbstractFactory;

class RectangleProduct extends AbstractRectangleProduct
{

  /**
   * RectangleProduct constructor.
   * @param int $x
   * @param int $y
   */
  public function __construct(int $x, int $y)
  {
    $this->x = $x;
    $this->y = $y;
  }

  public function draw(): void
  {
    print "Normal rectangle $this->x x $this->y <br>";
  }

  public function clear(): void
  {
    print "Clear normal rectangle <br>";
  }
}