<?php
use PHPUnit\Framework\TestCase;
use Src\Country;
use Src\Tax;
use Src\EmployeeV1;

final class TaxTest extends TestCase
{
    public function testGetWageAfterTax(): void
    {
        $canada = new Country(20);
        $employee = new EmployeeV1(26, 6000,2, true);
        $tax = new Tax($employee, $canada);

        $tax->countTax();
        $money = $tax->getWageAfterTax();
        $this->assertSame(40000, $money);


//        $stack = [];
//        array_push($stack, 'foo');
//        $this->assertSame('foo', $stack[count($stack)-1]);
//        $this->assertSame(1, count($stack));
//
//        $this->assertSame('foo', array_pop($stack));
//        $this->assertSame(0, count($stack));
    }
}