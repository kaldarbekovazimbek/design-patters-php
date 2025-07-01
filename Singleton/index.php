<?php

use Singleton\Singleton;

require_once 'Singleton.php';

$instance = Singleton::getInstance();

print_r($instance->asyHello());