<?php

namespace Patterns\CreationalDesign\Prototype;

use Patterns\CreationalDesign\Prototype\Shapes\Circle;
use Patterns\CreationalDesign\Prototype\Shapes\Rectangle;
use Patterns\CreationalDesign\Prototype\Shapes\ShapePrototype;
use Patterns\CreationalDesign\Prototype\Shapes\Square;

class ShapeCache
{
  /**
   * @var $shapeMap array[ShapePrototype]
   */
  private static $shapeMap = [];

  public static function getShape(string $shapeId): ShapePrototype {
    $cachedShape = self::$shapeMap[$shapeId] ?? null;
    return clone $cachedShape;
  }

  public static function loadCache() {
    $circle = new Circle();
    $circle->setId("1");
    self::$shapeMap[$circle->getId()] = $circle;

    $square = new Square();
    $square->setId("2");
    self::$shapeMap[$square->getId()] = $square;

    $rectangle = new Rectangle();
    $rectangle->setId("3");
    self::$shapeMap[$rectangle->getId()] = $rectangle;
  }
}
