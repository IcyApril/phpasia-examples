<?php

/**
 * User: junade
 * Date: 19/02/2017
 * Time: 21:18
 */
interface Calculator
{
    public function calculate(int $distance, bool $businessClass, bool $flyingClubMember): int;
}