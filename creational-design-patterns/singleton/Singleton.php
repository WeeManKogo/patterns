<?php

namespace Singleton;

interface SingletonInterface {
    public static function getInstance(): SingletonInterface;
}

abstract class Singleton implements SingletonInterface {
    private static $instances = [];
    
    final public static function getInstance(): SingletonInterface {
        self::$instances[ static::class ] = self::$instances[ static::class ] ?? new static();
        return self::$instances[ static::class ];
    }
}
