<?php

use chilimatic\lib\Interpreter\Operator\Binary\InterpreterBinaryAnd;

class InterpreterBinaryAndTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function checkIfBinaryAndIsInstanceOfFlyWeightOperaterInterface()
    {
        $and = new InterpreterBinaryAnd();


        self::assertInstanceOf(
            '\chilimatic\lib\Interfaces\IFlyWeightOperate',
            $and
        );
    }

    /**
     * @test
     */
    public function checkIfBinaryAndIsWorkingWithBoolean()
    {
        $and = new InterpreterBinaryAnd();


        self::assertEquals(1, $and->operate(true, true));
    }


    /**
     * @test
     */
    public function checkIfBinaryIntWithTwoDifferentIntegers()
    {
        $and = new InterpreterBinaryAnd();


        self::assertEquals(0, $and->operate(1, 2));
    }

    /**
     * @test
     */
    public function checkIfBinaryIntWithTwoSimilarIntegers()
    {
        $and = new InterpreterBinaryAnd();


        self::assertEquals(1, $and->operate(1, 1));
    }


    /**
     * @test
     */
    public function checkInvoke()
    {
        $and = new InterpreterBinaryAnd();

        self::assertEquals(1, $and(1, 1));
    }
}