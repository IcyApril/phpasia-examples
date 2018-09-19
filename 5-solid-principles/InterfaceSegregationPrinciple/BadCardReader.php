<?php

/**
 * User: junade
 * Date: 01/03/2017
 * Time: 14:42
 */
interface BadCardReader
{
    public function __construct(string $cardNumber, string $expiry, string $pin);

    public function withdraw(double $amount): bool;

    public function deposit(double $amount): bool;
}