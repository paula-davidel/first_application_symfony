<?php


namespace App\Service;


class DateCalculator
{
    public function yearDifference($year)
    {
        $current_year = date("Y");
        $diff = $current_year - $year;
        return $diff;
    }

}