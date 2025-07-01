<?php

namespace Singleton;

class Singleton {

    private static Singleton $instance;

    public static function getInstance(): Singleton
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function asyHello():string
    {
        return 'Hello World!';
    }
}