<?php

/**
 * User: junade
 * Date: 28/02/2017
 * Time: 15:20
 */
class Manager extends Staff
{
    public function getWeeklyHours(): double
    {
        return 40;
    }

    public function getSalary(): double
    {
        return $this->baseSalary * 1.2;
    }
}