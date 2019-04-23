<?php

namespace TestPatterns\StructuralDesign\Adapter;

use Patterns\StructuralDesign\Adapter\{
  AudioPlayer,
  MediaAdapter
};
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
  public function testMediaPlayerShouldBeMediaPlayerType() {
    $audioPlayer = new AudioPlayer();
    $advancedMediaPlayer = new MediaAdapter($audioPlayer);

    $this->assertInstanceOf(
      MediaAdapter::class,
      $advancedMediaPlayer
    );
  }

}
