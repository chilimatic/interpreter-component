<?php

use chilimatic\lib\Interpreter\Operator\Binary\InterpreterBinaryOr;

class InterpreterBinaryOrTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function checkIfBinaryOrIsInstanceOfFlyWeightOperaterInterface()
    {
        $or = new InterpreterBinaryOr();


        self::assertInstanceOf(
            '\chilimatic\lib\Interfaces\IFlyWeightOperate',
            $or
        );
    }

    /**
     * @test
     */
    public function checkIfBinaryOrIsWorkingWithBoolean()
    {
        $or = new InterpreterBinaryOr();


        self::assertEquals(1, $or->operate(true, true));
    }


    /**
     * @test
     */
    public function checkIfBinaryIntWithTwoDifferentIntegers()
    {
        $or = new InterpreterBinaryOr();


        self::assertEquals(3, $or->operate(1, 2));
    }

    /**
     * @test
     */
    public function checkIfBinaryIntWithTwoSimilarIntegers()
    {
        $or = new InterpreterBinaryOr();


        self::assertEquals(1, $or->operate(1, 0));
    }


    /**
     * @test
     */
    public function checkInvoke()
    {
        $or = new InterpreterBinaryOr();

        self::assertEquals(1, $or(1, 0));
    }
}