<?php

namespace FactoryMethod;
require_once 'IPayment.php';

class Visa implements IPayment {
    public function pay(int $amount): string
    {
        return 'visa - '. $amount . PHP_EOL;
    }
}