<?php

namespace Patterns\CreationalDesign\FactoryMethod;

abstract class CarFactory
{
  public abstract function createCar(): Car;

}
