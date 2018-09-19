<?php

/**
 * User: junade
 * Date: 28/02/2017
 * Time: 14:40
 */
abstract class Staff
{
    protected $baseSalary;
    private $paid;

    public function __construct(double $baseSalary)
    {
        $this->baseSalary = $baseSalary;
    }

    public abstract function getWeeklyHours(): double;

    public abstract function getSalary(): double;

    public function pay(double $bonus): bool
    {
        $this->paid += $this->getSalary() + $bonus;

        return true;
    }
}