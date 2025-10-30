<?php declare(strict_types=1);

namespace App\TwoSum;

use Exception;
use RuntimeException;

/**
 * @link https://leetcode.com/problems/two-sum
 */
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     * @throws Exception
     */
    public function twoSum(array $nums, int $target): array
    {
        $firstNumberKey = null;
        $secondNumberKey = null;

        foreach ($nums as $numKey => $num) {
            $firstNumber = $num;
            $firstNumberKey = $numKey;

            foreach ($nums as $otherNumKey => $otherNum) {
                if ($otherNumKey === $firstNumberKey) {
                    continue;
                }

                if ($firstNumber + $otherNum === $target) {
                    $secondNumberKey = $otherNumKey;
                    break;
                }
            }

            if ($secondNumberKey !== null) {
                break;
            }
        }

        $result = [$firstNumberKey, $secondNumberKey];

        if ($secondNumberKey === null) {
            $stringResult = json_encode($result);

            throw new RuntimeException("Could not find a second number to sum up to the target. Please check your \$nums argument. Returned: $stringResult");
        }

        return $result;
    }
}