<?php


namespace Patterns\CreationalDesign\Singleton;


interface SingletonInterface {
  public static function getInstance(): SingletonInterface;
}
