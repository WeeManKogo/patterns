<?php
declare(strict_types=1);

namespace TestPatterns\CreationalDesign\Singleton;
use Patterns\CreationalDesign\Singleton\Examples\Car;
use PHPUnit\Framework\TestCase;

final class SingletonTest extends TestCase
{

  public function testInstanceOfSingletonShouldBeCar(): void
  {
    $this->assertInstanceOf(
      Car::class,
      Car::getInstance(),
    );
  }

}