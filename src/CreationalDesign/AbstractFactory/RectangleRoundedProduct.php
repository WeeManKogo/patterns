<?php

namespace Patterns\CreationalDesign\AbstractFactory;

class RectangleRoundedProduct extends AbstractRectangleProduct
{

  /**
   * RectangleRoundedProduct constructor.
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
    print "Rounded rectangle $this->x x $this->y <br>";
  }

  public function clear(): void
  {
    print "Clear Rounded rectangle <br>";
  }
}