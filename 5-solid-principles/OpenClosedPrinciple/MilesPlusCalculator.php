<?php

/**
 * User: junade
 * Date: 28/02/2017
 * Time: 22:28
 */
class MilesPlusCalculator implements Calculator
{
    private $milesCalculator;

    public function __construct()
    {
        $this->milesCalculator = new MilesCalculator();
    }

    public function calculate(int $distance, bool $businessClass, bool $flyingClubMember): int
    {
        $miles = $this->milesCalculator->calculate($distance, $businessClass, $flyingClubMember);

        if ($businessClass === true && $flyingClubMember === true) {
            $miles += 1500;
        }

        return $miles;
    }
}