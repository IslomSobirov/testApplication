<?php

namespace App;
use App\Structure\TaxCount, App\Structure\Employee, App\Structure\CountryTax;

const DEDUCTION_FOR_CAR = 500;

class Tax implements TaxCount
{
    private int $wageAfterTax;
    private Employee $employee;
    private CountryTax $countryTax;

    public function __construct(Employee $employee, CountryTax $countryTax)
    {
        $this->employee = $employee;
        $this->countryTax = $countryTax;
    }

    public function getWageAfterTax() : int
    {
        return $this->wageAfterTax;
    }

    public function countTax()
    {
        $wageAfterTax = $this->employee->getWage();
        if ( $this->employee->usesCompanyCar() ) {
            $wageAfterTax = $wageAfterTax - DEDUCTION_FOR_CAR;
        }

        if ( $this->employee->getAge() > 50 ) {
            $wageAfterTax += ($this->employee->getWage() * 7) / 100;
        }

        if ($this->employee->getNumberOfKinds() > 2) {
            $wageAfterTax -=
                ( $this->employee->getWage() * ($this->countryTax->getTaxPercentage() - 2) ) / 100;
        } else {
            $wageAfterTax -=
                ( $this->employee->getWage() * $this->countryTax->getTaxPercentage() ) / 100;
        }

        $this->wageAfterTax = $wageAfterTax;

    }
}