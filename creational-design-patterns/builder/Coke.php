<?php


namespace Builder;
include 'ColdDrink.php';

class Coke extends ColdDrink
{

  public function price(): float
  {
    return 5.99;
  }

  public function name(): String
  {
    return 'Coke';
  }
}