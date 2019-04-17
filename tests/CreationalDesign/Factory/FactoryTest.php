<?php
declare(strict_types=1);

namespace TestPatterns\CreationalDesign\Singleton;

use Patterns\CreationalDesign\Factory\{
  Circle,
  Square,
  ShapeFactory,
};
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
  public function testTypeOfShapeShouldBeCircle()
  {
    $shapeFactory = new ShapeFactory();

    $this->assertInstanceOf(
      Circle::class,
      $shapeFactory->getShape(ShapeFactory::$SHAPE_CIRCLE)
    );
  }

  public function testTypeOfShapeShouldBeSquare()
  {
    $shapeFactory = new ShapeFactory();

    $this->assertInstanceOf(
      Square::class,
      $shapeFactory->getShape(ShapeFactory::$SHAPE_SQUARE)
    );
  }

}
