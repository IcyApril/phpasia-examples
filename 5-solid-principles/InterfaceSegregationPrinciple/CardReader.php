<?php

/**
 * User: junade
 * Date: 01/03/2017
 * Time: 14:57
 */
interface CardReader
{
    public function __construct(string $cardNumber, string $expiry, string $authCode);

    public function getAuthCode(): double;
}