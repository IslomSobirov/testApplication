<?php

namespace App;
use App\Structure\CountryTax;

class Country implements CountryTax
{
    private int $taxPercentage;

    public function __construct(int $taxPercentage)
    {
        $this->taxPercentage = $taxPercentage;
    }

    public function getTaxPercentage(): int
    {
        return $this->taxPercentage;
    }
}