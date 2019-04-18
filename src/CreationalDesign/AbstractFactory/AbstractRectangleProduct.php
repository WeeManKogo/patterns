<?php

namespace Patterns\CreationalDesign\AbstractFactory;

abstract class AbstractRectangleProduct
{
  /**
   * @var $x int
   */
  protected $x;

  /**
   * @var $y int
   */
  protected $y;

  public abstract function __construct(int $x, int $y);
  public abstract function draw(): void;
  public abstract function clear(): void;
}