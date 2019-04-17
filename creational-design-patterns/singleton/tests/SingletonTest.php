<?php
declare(strict_types=1);
include "../Singleton.php";

use PHPUnit\Framework\TestCase;

final class SingletonTest extends TestCase
{

  public function testCanBeCreatedFromValidEmailAddress(): void
  {
    $this->assertInstanceOf(
      Car::class,
      Car::getInstance(),
    );
  }

}