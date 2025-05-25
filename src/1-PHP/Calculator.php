<?php

declare(strict_types=1);

namespace App\PHP;

/**
 * Time Limit: 10 mins
 * 
 * Design and implement a Calculator Service in PHP that supports basic arithmetic operations with unit tests
 *
 * Because of the time restriction, the product team decides to only implement the following operations:
 * - addition
 * - division
 *
 */
class Calculator
{
    public function addition($num1, $num2)
    {
        return $num1 + $num2;
    }

    public function division($num1, $num2)
    {
        return $num1 / $num2;
    }
}
