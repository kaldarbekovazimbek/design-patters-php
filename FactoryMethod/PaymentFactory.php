<?php

namespace FactoryMethod;

use http\Exception\InvalidArgumentException;
require_once 'Payme.php';
require_once 'Click.php';
require_once 'Visa.php';
class PaymentFactory
{
    public function createPayment(string $type): IPayment
    {
        return match ($type) {
            'payme' => new Payme(),
            'click' => new Click(),
            'visa' => new Visa(),
            default => throw new InvalidArgumentException('Invalid payment type'),
        };
    }
}