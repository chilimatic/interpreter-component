<?php
use chilimatic\lib\Interpreter\Type\InterpreterTypeBoolean;

/**
 * Class InperpreterTypeBooleanTest
 */
class InperpreterTypeBooleanTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function classImplementsFlyWeightInterface()
    {
        $type = new InterpreterTypeBoolean();

        self::assertInstanceOf('\chilimatic\lib\Interfaces\IFlyWeightExecute', $type);
    }

    /**
     * @test
     */
    public function checkIfTheStringTrueGetsInterpretedAsBooleanTrue()
    {
        $type = new InterpreterTypeBoolean();

        self::assertTrue($type->execute('true'));
    }

    /**
     * @test
     */
    public function checkIfTheUppercaseStringTrueGetsInterpretedAsBooleanTrue()
    {
        $type = new InterpreterTypeBoolean();

        self::assertTrue($type->execute('TRUE'));
    }

    /**
     * @test
     */
    public function checkIfTheCamelcaseStringTrueGetsInterpretedAsBooleanTrue()
    {
        $type = new InterpreterTypeBoolean();

        self::assertTrue($type->execute('tRuE'));
    }

    /**
     * @test
     */
    public function checkIfTheStringFalseGetsInterpretedAsBooleanFalse()
    {
        $type = new InterpreterTypeBoolean();

        self::assertFalse($type->execute('false'));
    }

    /**
     * @test
     */
    public function checkIfTheString1GetsInterpretedAsBooleanTrue()
    {
        $type = new InterpreterTypeBoolean();

        self::assertTrue($type->execute('1'));
    }


    /**
     * @test
     */
    public function checkIfTheInteger11GetsInterpretedAsBooleanTrue()
    {
        $type = new InterpreterTypeBoolean();

        self::assertNull($type->execute(11));
    }

    /**
     * @test
     */
    public function checkIfTheStringTrueFriendsGetsInterpretedAsBooleanTrue()
    {
        $type = new InterpreterTypeBoolean();

        self::assertNull($type->execute('TrueFriends'));
    }

    /**
     * @test
     */
    public function checkIfInvokationWorks()
    {
        $type = new InterpreterTypeBoolean();

        self::assertTrue($type('tRuE'));
    }
}