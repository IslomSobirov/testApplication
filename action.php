<?php
require "./vendor/autoload.php";
require  "./functions.php";
use App\Country;
use App\EmployeeV1;
use App\Tax;

echo "Hello! What is the name of employee:\n";
$strName = fread(STDIN, 80);
echo 'Name of the employee is: ' , $strName , "\n";

$age = getAge();
$kids = numberOfKinds();
$wage = getWage();
$usesCompanyCar = usesCompanyCar();

$canada = new Country(20);
$employee = new EmployeeV1($age, $kids, $wage, $usesCompanyCar);
$tax = new Tax($employee, $canada);

$tax->countTax();
$money = $tax->getWageAfterTax();

echo "Wage after taxing  {$money}$ \n";
