<?php
use PHPUnit\Framework\TestCase;
use App\Country;
use App\Tax;
use App\EmployeeV1;

final class TaxTest extends TestCase
{
    public function testGetWageAfterTax(): void
    {
        $cases = [
            [
                "name" => "Alice",
                "age" => 26,
                "kids" => 2,
                "wage" => 6000,
                "companyCar" => false,
                "result" => 4800
            ],
            [
                "name" => "Bob",
                "age" => 52,
                "kids" => 0,
                "wage" => 4000,
                "companyCar" => true,
                "result" => 2980
            ],
            [
                "name" => "Charlie",
                "age" => 36,
                "kids" => 3,
                "wage" => 5000,
                "companyCar" => true,
                "result" => 3600
            ]
        ];

        foreach ($cases as $case) {
            $canada = new Country(20);
            $employee = new EmployeeV1($case["age"], $case["kids"],$case["wage"], $case["companyCar"]);
            $tax = new Tax($employee, $canada);

            $tax->countTax();
            print_r(
                "\n" . $case["name"] . ",  age:" . $case["age"]. ", wage before tax: ". $case["wage"]
            );
            $money = $tax->getWageAfterTax();

            print_r(", Wage after taxes " . $money);
            $this->assertSame($case["result"], $money);
        }
    }
}