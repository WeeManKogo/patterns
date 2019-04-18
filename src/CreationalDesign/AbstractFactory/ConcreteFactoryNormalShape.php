<?php

namespace Patterns\CreationalDesign\AbstractFactory;

class ConcreteFactoryNormalShape extends AbstractShapeFactory
{

  public function createRectangle(): AbstractRectangleProduct
  {
    return new RectangleProduct(10, 20);
  }

  public function createTriangle(): AbstractTriangleProduct
  {
    return new TriangleProduct(10, 20, 15);
  }
}