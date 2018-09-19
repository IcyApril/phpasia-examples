<?php

/**
 * User: junade
 * Date: 01/03/2017
 * Time: 16:04
 */
interface CashDepository
{
    public function __construct(CardReader $reader);

    public function deposit(double $amount): bool;
}