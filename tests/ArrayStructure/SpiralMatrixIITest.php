<?php

namespace Test\BinaryTree\ArrayStructure;

use App\BinaryTree\ArrayStructure\SpiralMatrixII;
use PHPUnit\Framework\TestCase;

class SpiralMatrixIITest extends TestCase
{

    public function testGenerateMatrix3x3()
    {
        $spiralMatrixII = new SpiralMatrixII();
        $result = $spiralMatrixII->generateMatrix(3);
        self::assertEquals([[1, 2, 3], [8, 9, 4], [7, 6, 5]], $result);
    }

    public function testGenerateMatrix2x2()
    {
        $spiralMatrixII = new SpiralMatrixII();
        $result = $spiralMatrixII->generateMatrix(2);
        self::assertEquals([[1, 2], [4, 3]], $result);
    }
}
