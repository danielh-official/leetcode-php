<?php declare(strict_types=1);

namespace Tests\TwoSum;

use App\TwoSum\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function testEquals9(): void
    {
        $nums = [2, 7, 11, 15];
        $target = 9;

        $result = new Solution()->twoSum($nums, $target);

        $this->assertEquals([0, 1], $result);
    }

    public function testEquals6(): void
    {
        $nums = [3, 2, 4];
        $target = 6;

        $result = new Solution()->twoSum($nums, $target);

        $this->assertEquals([1, 2], $result);
    }

    public function testEquals6WithTwoSameNumbers(): void
    {
        $nums = [3, 3];
        $target = 6;

        $result = new Solution()->twoSum($nums, $target);

        $this->assertEquals([0, 1], $result);
    }
}