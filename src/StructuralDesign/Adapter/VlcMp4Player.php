<?php

namespace Patterns\StructuralDesign\Adapter;

class VlcMp4Player implements AdvancedMediaPlayer
{

  public function playVlc(string $fileName): void
  {
    print "Playing vlc file. Name: " . $fileName . "<br>";
  }

  public function playMp4(string $fileName): void
  {
    print "Playing MP4 file. Name: " . $fileName . "<br>";
  }
}
