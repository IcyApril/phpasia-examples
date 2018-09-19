<?php

/**
 * User: junade
 * Date: 01/03/2017
 * Time: 15:55
 */
interface CashDispenser
{
    public function __construct(CardReader $reader);

    public function withdraw(double $amount): bool;
}