<?php

namespace Patterns\StructuralDesign\Adapter;

class MediaAdapter implements MediaPlayer
{

  /**
   * @var $advancedMediaPlayer AdvancedMediaPlayer
   */
  private $advancedMediaPlayer;

  /**
   * @var $mediaPlayer MediaPlayer
   */
  private $mediaPlayer;

  public const MP4_TYPE = 'mp4';
  public const VLC_TYPE = 'vlc';
  public const MP3_TYPE = 'mp3';

  public function __construct(MediaPlayer $mediaPlayer)
  {
    $this->advancedMediaPlayer = new VlcMp4Player();
    $this->mediaPlayer = $mediaPlayer;
  }

  public function play(string $audioType, string $fileName): void
  {
    switch ($audioType) {
      case self::MP4_TYPE:
        $this->advancedMediaPlayer->playMp4($fileName);
        break;
      case self::VLC_TYPE:
        $this->advancedMediaPlayer->playVlc($fileName);
        break;
      case self::MP3_TYPE:
        $this->mediaPlayer->play($audioType, $fileName);
        break;
    }
  }
}
