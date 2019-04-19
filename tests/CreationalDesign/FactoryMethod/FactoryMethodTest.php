<?php

namespace TestPatterns\CreationalDesign\FactoryMethod;

use Patterns\CreationalDesign\FactoryMethod\Volvo;
use Patterns\CreationalDesign\FactoryMethod\VolvoFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{

  public function testFactoryShouldBeVolvoFactoryType() {
    $factory = new VolvoFactory();

    $this->assertInstanceOf(
      VolvoFactory::class,
      $factory
    );

    return $factory;
  }

  /**
   * @depends testFactoryShouldBeVolvoFactoryType
   */
  public function testCarShouldBeVolvoType(VolvoFactory $factory) {
    $car = $factory->createCar();

    $this->assertInstanceOf(
      Volvo::class,
      $car
    );
  }

}
