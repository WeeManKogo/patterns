<?php

namespace Patterns\CreationalDesign\FactoryMethod;

class VolvoFactory extends CarFactory
{

  public function createCar(): Car
  {
    return new Volvo();
  }
}
