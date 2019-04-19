<?php

namespace TestPatterns\CreationalDesign\ObjectPool;

use Patterns\CreationalDesign\ObjectPool\WorkerPool;
use PHPUnit\Framework\TestCase;

class ObjectPoolTest extends TestCase
{

  public function testWorkerIdShouldBe2()
  {
    $pool = new WorkerPool();
    $worker1 = $pool->getWorker();
    $worker2 = $pool->getWorker();
    $pool->release($worker1);

    $this->assertEquals(
      2,
      $worker2->getId()
    );
  }

}
