<?php

namespace App\Structure;

interface CountryTax {
    public function getTaxPercentage(): int;
}