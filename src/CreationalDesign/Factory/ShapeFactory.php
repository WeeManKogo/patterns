<?php

namespace Patterns\CreationalDesign\Factory;

/**
 * Class ShapeFactory Noob implementation of getShape method (predefined list of possible objects to create)
 * @package Factory
 */
class ShapeFactory
{
  public static $SHAPE_CIRCLE = 'Circle';
  public static $SHAPE_SQUARE = 'Square';

  public function getShape(String $shapeId): Shape
  {
    if ($shapeId == null) {
      throw new Exception('Shape can\'t be null.');
    }

    if (strcmp($shapeId, 'Circle') == 0) {
      return new Circle();
    } else if (strcmp($shapeId, 'Square') == 0) {
      return new Square();
    }
  }
}