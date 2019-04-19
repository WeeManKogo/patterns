<?php

namespace Patterns\CreationalDesign\ObjectPool;

class WorkerEntity
{
  /**
   * @var $id int
   */
  private $id;

  /**
   * @var $name string
   */
  private $name;

  /**
   * WorkerEntity constructor.
   * @param int $id
   * @param string $name
   */
  public function __construct(int $id, string $name)
  {
    $this->id = $id;
    $this->name = $name;
  }

  /**
   * @return int
   */
  public function getId(): int
  {
    return $this->id;
  }

  /**
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  public function getCurrentWorkInfo() {
    return "$this->name: working";
  }

}
