<?php
namespace App;
use App\Structure\Employee;

class EmployeeV1 implements Employee {

    private int $numberOfKinds;
    private int $age;
    private int $wage;
    private bool $usesCompanyCar;

    public function __construct(int $age, int $numberOfKinds, int $wage, int $usesCompanyCar)
    {
        $this->age = $age;
        $this->numberOfKinds = $numberOfKinds;
        $this->wage = $wage;
        $this->usesCompanyCar = $usesCompanyCar;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function setNumberOfKinds(int $numberOfKids)
    {
        $this->numberOfKinds = $numberOfKids;
    }

    public function getNumberOfKinds(): int
    {
        return $this->numberOfKinds;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function usesCompanyCar(): bool
    {
        return $this->usesCompanyCar;
    }

    public function getWage(): int
    {
        return $this->wage;
    }

}
