<?php

/**
 * User: junade
 * Date: 28/02/2017
 * Time: 22:25
 */
interface Calculator
{
    public function calculate(int $distance, bool $businessClass, bool $flyingClubMember): int;
}