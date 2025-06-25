<?php

require_once 'PaymentFactory.php';

use FactoryMethod\PaymentFactory;

$payment = new PaymentFactory();
$payment2 = new PaymentFactory();
$payment3 = new PaymentFactory();

$method = $payment->createPayment('click');
$method2 = $payment2->createPayment('visa');
$method3 = $payment3->createPayment('payme');

print_r($method->pay(5000));
print_r($method2->pay(2000));
print_r($method3->pay(3000));
