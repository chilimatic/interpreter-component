<?php
namespace chilimatic\lib\Interpreter\Operator\Binary;
use chilimatic\lib\interfaces\IFlyWeightOperate;

/**
 * Class InterpreterBinaryAnd
 * @package chilimatic\lib\Interpreter\Operator\Binary
 */
class InterpreterBinaryAnd implements IFlyWeightOperate
{
    /**
     * @param mixed $input1
     * @param mixed $input2
     *
     * @return int
     */
    public function operate($input1, $input2)
    {
        return (bool)$input1 & (bool)$input2;
    }

    /**
     * @param mixed $input1
     * @param mixed $input2
     *
     * @return int|mixed
     */
    public function __invoke($input1, $input2)
    {
        return $this->operate($input1, $input2);
    }
}