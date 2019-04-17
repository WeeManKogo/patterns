<?php


namespace Builder;
include 'Item.php';
include 'Wrapper.php';

abstract class Burger implements Item
{

  public function packing(): Packing
  {
    return new Wrapper();
  }

  public abstract function price(): float;
}