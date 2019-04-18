<?php

namespace TestPatterns\CreationalDesign\AbstractFactory;

use Patterns\CreationalDesign\AbstractFactory\{
  ConcreteFactoryRoundedShape,
  FactoryProducer,
  TriangleRoundedProduct
};

use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
  public function testConcreteFactoryShouldBeRoundedType()
  {
    $factory = FactoryProducer::getShapeFactory(FactoryProducer::ROUNDED_FACTORY);
    $this->assertInstanceOf(
      ConcreteFactoryRoundedShape::class,
      $factory
    );

    return $factory;
  }

  /**
   * @depends testConcreteFactoryShouldBeRoundedType
   */
  public function testProductShouldBeRoundedTriangleType(ConcreteFactoryRoundedShape $factory)
  {
    $this->assertInstanceOf(
      TriangleRoundedProduct::class,
      $factory->createTriangle()
    );
  }
}