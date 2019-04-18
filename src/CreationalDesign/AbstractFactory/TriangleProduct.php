<?php

namespace Patterns\CreationalDesign\AbstractFactory;

class TriangleProduct extends AbstractTriangleProduct
{

  /**
   * TriangleProduct constructor.
   * @param int $x
   * @param int $y
   * @param int $z
   */
  public function __construct(int $x, int $y, int $z)
  {
    $this->x = $x;
    $this->y = $y;
    $this->z = $z;
  }

  public function draw(): void
  {
    print "Normal triangle $this->x x $this->y x $this->z <br>";
  }

  public function clear(): void
  {
    print "Clear normal triangle <br>";
  }
}