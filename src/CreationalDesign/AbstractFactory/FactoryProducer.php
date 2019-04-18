<?php

namespace Patterns\CreationalDesign\AbstractFactory;

/**
 * Class FactoryProducer
 * @package Patterns\CreationalDesign\AbstractFactory
 *
 * For simplicity this example there is not used Singleton Pattern to create Concrete Factories
 */
class FactoryProducer
{

  public const NORMAL_FACTORY = false;
  public const ROUNDED_FACTORY = true;

  public static function getShapeFactory(bool $rounded): AbstractShapeFactory {
    if ($rounded) {
      return new ConcreteFactoryRoundedShape();
    } else {
      return new ConcreteFactoryNormalShape();
    }
  }
}