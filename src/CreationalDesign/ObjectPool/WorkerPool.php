<?php

namespace Patterns\CreationalDesign\ObjectPool;

class WorkerPool
{
  private $occupied = [];
  private $free = [];

  public function getWorker()
  {
    if (count($this->free) == 0) {
      $id = count($this->occupied) + count($this->free) + 1;
      $name = "WorkerName-" . rand(10, 100);
      $worker = new WorkerEntity($id, $name);
    } else {
      $worker = array_pop($this->free);
    }

    $this->occupied[$worker->getId()] = $worker;

    return $worker;
  }

  public function release(WorkerEntity $worker)
  {
    $id = $worker->getId();

    if (isset($this->occupied[$id])) {
      unset($this->occupied[$id]);

      $this->free[$id] = $worker;
    }
  }

}
