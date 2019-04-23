<?php

namespace Patterns\StructuralDesign\Adapter;

class AudioPlayer implements MediaPlayer
{

  public function play(string $audioType, string $fileName): void
  {
    print "Playing MP3 file. Name: " . $fileName . "<br>";
  }
}
