<?php

namespace FactoryMethod;
require_once 'IPayment.php';

class Click implements IPayment {
    public function pay(int $amount): string
    {
        return 'click pay - ' . $amount . PHP_EOL;
    }
}