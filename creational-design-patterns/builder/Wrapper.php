<?php


namespace Builder;
include 'Packing.php';

class Wrapper implements Packing
{

  public function pack(): String
  {
    return 'Wrapper';
  }
}