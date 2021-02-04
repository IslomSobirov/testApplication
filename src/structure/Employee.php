<?php
namespace App\Structure;

interface Employee {
    public function getNumberOfKinds(): int;
    public function getAge(): int;
    public function usesCompanyCar(): bool;
    public function getWage(): int;
}
