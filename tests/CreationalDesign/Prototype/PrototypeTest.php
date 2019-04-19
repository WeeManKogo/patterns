<?php

namespace TestPatterns\CreationalDesign\Prototype;

use Patterns\CreationalDesign\Prototype\{
  ShapeCache,
  Shapes\Circle,
  Shapes\Rectangle,
  Shapes\Square,
};
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
  public function testShape1ShouldBeCircleType() {
    ShapeCache::loadCache();

    $shape = ShapeCache::getShape("1");

    $this->assertInstanceOf(
      Circle::class,
      $shape
    );
  }

  public function testShape2ShouldBeSquareType() {
    ShapeCache::loadCache();

    $shape = ShapeCache::getShape("2");

    $this->assertInstanceOf(
      Square::class,
      $shape
    );
  }

  public function testShape3ShouldBeRectangleType() {
    ShapeCache::loadCache();

    $shape = ShapeCache::getShape("3");

    $this->assertInstanceOf(
      Rectangle::class,
      $shape
    );
  }

}
