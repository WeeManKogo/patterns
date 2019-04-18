<?php

namespace Patterns\CreationalDesign\AbstractFactory;

abstract class AbstractShapeFactory
{
  public abstract function createRectangle(): AbstractRectangleProduct;
  public abstract function createTriangle(): AbstractTriangleProduct;
}