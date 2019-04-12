<?php
include "ShapeFactory.php";

$shapeFactory = new \Factory\ShapeFactory();

$circle = $shapeFactory->getShape(\Factory\ShapeFactory::$SHAPE_CIRCLE);
$square = $shapeFactory->getShape(\Factory\ShapeFactory::$SHAPE_SQUARE);

echo '<pre>';

$circle->draw();
$square->draw();