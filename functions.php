<?php

function getAge(): int {
    echo "Age of employee:(int value)\n";
    $age = (int) fread(STDIN, 80);
    if (!intval($age)) {
        return getAge();
    }
    echo 'Age of the employee is: ' , $age , "\n";
    return $age;
}

function numberOfKinds() : int {
    echo "Number of kids:(int value)\n";
    $kids = (int)fread(STDIN, 80);
    if (!intval($kids)) {
        return NumberOfKinds();
    }
    return $kids;
}

function getWage(): int {
    echo "Wage :(int value)\n";
    $wage = (int) fread(STDIN, 80);
    if (!intval($wage) || $wage < 0) {
        echo "Wage has to be integer value and more than 0";
        return NumberOfKinds();
    }
    return $wage;
}

function usesCompanyCar(): bool {
    echo "Do you use company car (yes/no)";
    $car = strtoupper(fread(STDIN, 80));
    return $car == "YES";
}