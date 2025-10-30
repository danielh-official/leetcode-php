<?php declare(strict_types=1);

namespace RomanToInteger;

use App\RomanToInteger\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function testIII(): void
    {
        $result = new Solution()->romanToInt('III');

        $this->assertEquals(3, $result);
    }

    public function testLVIII(): void
    {
        $result = new Solution()->romanToInt('LVIII');

        $this->assertEquals(58, $result);
    }

    public function testMCMXCIV(): void
    {
        $result = new Solution()->romanToInt('MCMXCIV');

        $this->assertEquals(1994, $result);
    }
}