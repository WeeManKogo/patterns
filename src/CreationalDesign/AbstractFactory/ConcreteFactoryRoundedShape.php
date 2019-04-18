<?php

namespace Patterns\CreationalDesign\AbstractFactory;

class ConcreteFactoryRoundedShape extends AbstractShapeFactory
{

  public function createRectangle(): AbstractRectangleProduct
  {
    return new RectangleRoundedProduct(11, 21);
  }

  public function createTriangle(): AbstractTriangleProduct
  {
    return new TriangleRoundedProduct(11, 21, 16);
  }
}