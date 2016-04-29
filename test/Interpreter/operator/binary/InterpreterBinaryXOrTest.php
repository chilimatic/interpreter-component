<?php

use chilimatic\lib\Interpreter\Operator\Binary\InterpreterBinaryXOr;

class InterpreterBinaryXOrTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function checkIfBinaryXOrIsInstanceOfFlyWeightOperaterInterface()
    {
        $xOr = new InterpreterBinaryXOr();


        self::assertInstanceOf(
            '\chilimatic\lib\Interfaces\IFlyWeightOperate',
            $xOr
        );
    }

    /**
     * @test
     */
    public function checkIfBinaryXOrIsWorkingWithBoolean()
    {
        $xOr = new InterpreterBinaryXOr();


        self::assertEquals(0, (int) $xOr->operate(true, true));
    }


    /**
     * @test
     */
    public function checkIfBinaryIntWithTwoDifferentIntegers()
    {
        $xOr = new InterpreterBinaryXOr();


        self::assertEquals(0, (int) $xOr->operate(1, 2));
    }

    /**
     * @test
     */
    public function checkIfBinaryIntWithTwoSimilarIntegers()
    {
        $xOr = new InterpreterBinaryXOr();


        self::assertEquals(0, (int) $xOr->operate(1, 1));
    }


    /**
     * @test
     */
    public function checkInvoke()
    {
        $xOr = new InterpreterBinaryXOr();

        self::assertEquals(0, (int) $xOr(1, 1));
    }
}