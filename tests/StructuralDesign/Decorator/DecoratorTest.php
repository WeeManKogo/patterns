<?php

namespace TestPatterns\StructuralDesign\Decorator;

use Patterns\StructuralDesign\Decorator\{
  RedShapeDecorator,
  Shapes\Circle,
};

use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
  public function testShapeShouldBeRedShapeDecoratorType() {
    $circle = new Circle();
    $redCircle = new RedShapeDecorator($circle);

    $this->assertInstanceOf(
      RedShapeDecorator::class,
      $redCircle
    );
  }

}
