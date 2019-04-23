<?php

namespace Patterns\StructuralDesign\Adapter;

interface MediaPlayer
{
  public function play(string $audioType, string $fileName): void;
}
