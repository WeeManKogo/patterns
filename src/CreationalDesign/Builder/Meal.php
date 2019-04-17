<?php

namespace Patterns\CreationalDesign\Builder;

class Meal
{

  /**
   * @var $items array[Builder\Item]
   */
  private $items;

  /**
   * @param Item $item
   */
  public function addItem(Item $item): void
  {
    $this->items[] = $item;
  }

  public function getCost(): float
  {
    $cost = 0.0;

    /**
     * @var $item Item
     */
    foreach ($this->items as $item) {
      $cost += $item->price();
    }

    return $cost;
  }

  public function showItems() {

    /**
     * @var $item Item
     */
    foreach($this->items as $item) {
      print 'Name: ' . $item->name() . "<br>";
      print 'Packing: ' . $item->packing()->pack() . "<br>";
      print 'Price: ' . $item->price() . "<br>";
      print "<br>";
    }
  }

}