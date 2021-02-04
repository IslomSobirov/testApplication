<?php

namespace App\Structure;

interface TaxCount {
    public function getWageAfterTax(): int;
    public function countTax();
}
