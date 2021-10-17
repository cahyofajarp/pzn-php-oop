<?php

namespace FajarTest\Test;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testManual()
    {
        self::assertEquals(15, Math::sum([5,10]));
        self::assertEquals(5, Math::sum([4,1]));
        self::assertEquals(20, Math::sum([10,10]));
        self::assertEquals(28, Math::sum([20,8]));
    } 
    
    /**
     * @dataProvider sumMathData
     *
     * 
     */


     public function testDataProvider(array $values,int $expected)
    {
        self::assertEquals($expected,Math::sum($values));
    }

    public function sumMathData():array
    {
        return [
            [[5,5],10],
            [[10,10,10,10,10],50],
            [[5,3],8],
            [[10,20],30],
            [[0],0],
        ];
    }

    /**
     * @testWith [[5,5],10]
     *           [[10,10,10,10,10],50]
     *           [[5,3],8]
     *           [[10,20],30]
     *           [[0],0]
     */

    public function testWith(array $values,int $expected)
    {
        self::assertEquals($expected,Math::sum($values));
    }
}