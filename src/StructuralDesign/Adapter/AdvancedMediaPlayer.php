<?php

namespace Patterns\StructuralDesign\Adapter;

interface AdvancedMediaPlayer
{
  public function playVlc(string $fileName): void;
  public function playMp4(string $fileName): void;
}
