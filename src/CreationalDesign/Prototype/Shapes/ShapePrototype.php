<?php

namespace Patterns\CreationalDesign\Prototype\Shapes;

abstract class ShapePrototype
{
  /**
   * @var $id string
   */
  private $id;

  /**
   * @var $type string
   */
  protected $type;

  public abstract function draw(): void;

  /**
   * @return string
   */
  public function getId(): string
  {
    return $this->id;
  }

  /**
   * @param string $id
   */
  public function setId(string $id): void
  {
    $this->id = $id;
  }

  /**
   * @return string
   */
  public function getType(): string
  {
    return $this->type;
  }

  public abstract function __clone();
}
