<?php declare(strict_types=1);

namespace App\RomanToInteger;

use Exception;
use RuntimeException;

/**
 * @link https://leetcode.com/problems/roman-to-integer/
 */
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    public function romanToInt(string $s): int {
        $map = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];

        $result = 0;
        $length = strlen($s);

        for ($i = 0; $i < $length; $i++) {
            // Find the value based on the index for the roman numerals
            // If III is passed, then it first gets $i of $s which is $s[0] = "I"
            // It then takes the "I" and applies it to the roman numeral index (or map) to determine what value it should be: $map["I"] = 1
            $currentValue = $map[$s[$i]];

            // Check if there is a next value
            if ($i + 1 < $length) {
                $nextValue = $map[$s[$i + 1]];

                // If the current value is less than the next value, we need to subtract it
                // For example, IV = 4. I (1) is less than V (5), so we subtract it: 5 - 1 = 4
                if ($currentValue < $nextValue) {
                    $result -= $currentValue;
                    continue;
                }
            }

            // Otherwise, we just add the current value
            $result += $currentValue;
        }

        return $result;
    }
}