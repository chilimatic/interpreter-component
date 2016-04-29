<?php
use chilimatic\lib\Interpreter\Operator\InterpreterOperatorFactory;

/**
 * Class InterpreterOperatorFactoryTest
 */
class InterpreterOperatorFactoryTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function checkIfOptionsFactoryInterfaceIsImplemented()
    {
        $factory = new InterpreterOperatorFactory();

        self::assertInstanceOf('\chilimatic\lib\Interfaces\IFactoryOptions', $factory);
    }


    /**
     * @test
     */
    public function checkIfFactoryUnknownOperatorClassReturnsNull()
    {
        $factory = new InterpreterOperatorFactory();

        self::assertNull($factory->make('none', []));
    }

    /**
     * @test
     */
    public function checkIfFactoryReturnsKnownOperatorWithNamespace()
    {
        $factory = new InterpreterOperatorFactory();

        self::assertInstanceOf(
            '\chilimatic\lib\Interpreter\Operator\Binary\\InterpreterBinaryAnd',
            $factory->make('\chilimatic\lib\Interpreter\Operator\Binary\\InterpreterBinaryAnd', [])
        );
    }

    /**
     * @test
     */
    public function checkIfFactoryReturnsKnownOperatorWithoutNamespace()
    {
        $factory = new InterpreterOperatorFactory();

        self::assertNotNull($factory->make('Binary\\InterpreterBinaryAnd', []));
    }


    /**
     * @test
     */
    public function checkIfMultipleCallFactoryReturnsSameKnownOperatorWithoutNamespace()
    {
        $factory = new InterpreterOperatorFactory();
        $op1 =$factory->make('Binary\\InterpreterBinaryAnd', []);


        self::assertEquals($op1, $factory->make('Binary\\InterpreterBinaryAnd', []));
    }


    /**
     * @test
     */
    public function checkIfMultipleCallFactoryReturnsDifferentKnownOperatorWithoutNamespace()
    {
        $factory = new InterpreterOperatorFactory();
        $op1 =$factory->make('Binary\\InterpreterBinaryOr', []);


        self::assertNotEquals($op1, $factory->make('Binary\\InterpreterBinaryAnd', []));
    }

    /**
     * @test
     */
    public function checkIfinvokeWorksProperly()
    {
        $factory = new InterpreterOperatorFactory();

        self::assertInstanceOf(
            '\chilimatic\lib\Interpreter\Operator\Binary\\InterpreterBinaryAnd',
            $factory('Binary\\InterpreterBinaryAnd', [])
        );
    }
}