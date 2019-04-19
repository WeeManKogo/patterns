<?php

namespace Patterns\CreationalDesign\FactoryMethod;

class Volvo implements Car
{

  public function drive(): void
  {
    print 'Volvo engine started';
  }
}
