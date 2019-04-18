<?php

namespace Patterns\CreationalDesign\AbstractFactory;

abstract class AbstractTriangleProduct
{
  /**
   * @var $x int
   */
  protected $x;

  /**
   * @var $y int
   */
  protected $y;

  /**
   * @var $z int
   */
  protected $z;

  public abstract function __construct(int $x, int $y, int $z);
  public abstract function draw(): void;
  public abstract function clear(): void;
}