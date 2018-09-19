<?php

/**
 * User: junade
 * Date: 28/02/2017
 * Time: 14:53
 */
class Executive extends Staff
{
    public function getWeeklyHours(): double
    {
        return 37.5;
    }

    public function getSalary(): double
    {
        return $this->baseSalary;
    }
}