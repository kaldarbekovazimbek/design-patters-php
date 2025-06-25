<?php

namespace FactoryMethod;

require_once 'IPayment.php';

class Payme implements IPayment
{
    public function pay(int $amount): string
    {
        return 'pay - ' . $amount . PHP_EOL;
    }
}