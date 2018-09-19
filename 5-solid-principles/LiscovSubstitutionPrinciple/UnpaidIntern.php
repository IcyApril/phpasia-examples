<?php

/**
 * User: junade
 * Date: 28/02/2017
 * Time: 16:15
 */
class UnpaidIntern
{
    public function getWeeklyHours(): double
    {
        return 35;
    }

    public function getSalary(): double
    {
        return 0;
    }

    /**
     * Example breech of the Liscov Inversion Principle
     *
     * @param float $bonus
     *
     * @return bool
     */
    public function pay(double $bonus): bool
    {
        return false;
    }

    /**
     * Another breech of principle due to adding a method not in the underlying interface.
     *
     * @return bool
     */
    public function makeCoffee(): bool
    {
        return true;
    }
}