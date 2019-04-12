<?php

namespace Factory;

include "Shape.php";

/**
 * Class ShapeFactory Noob implementation of getShape method (predefined list of possible objects to create)
 * @package Factory
 */
class ShapeFactory
{
  public static $SHAPE_CIRCLE = 'Circle';
  public static $SHAPE_SQUARE = 'Square';

  public function getShape(String $shapeId): Shape\Shape
  {
    if ($shapeId == null) {
      throw new Exception('Shape can\'t be null.');
    }

    if (strcmp($shapeId, 'Circle') == 0) {
      return new Shape\Circle();
    } else if (strcmp($shapeId, 'Square') == 0) {
      return new Shape\Square();
    }
  }
}