<?php

namespace Patterns\CreationalDesign\AbstractFactory;

class TriangleRoundedProduct extends AbstractTriangleProduct
{

  /**
   * TriangleRoundedProduct constructor.
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
    print "Rounded triangle $this->x x $this->y x $this->z <br>";
  }

  public function clear(): void
  {
    print "Clear rounded triangle <br>";
  }
}