<?php

namespace FactoryMethod;

interface IPayment {
    public function pay(int $amount);
}