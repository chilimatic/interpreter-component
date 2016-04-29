<?php

namespace chilimatic\lib\Interpreter\Operator\Binary;
use chilimatic\lib\interfaces\IFlyWeightOperate;

/**
 * Class InterpreterBinaryXOr
 * @package chilimatic\lib\Interpreter\Operator\Binary
 */
class InterpreterBinaryXOr implements IFlyWeightOperate
{
    /**
     * @param $input1
     * @param $input2
     *
     * @return int
     */
    public function operate($input1, $input2)
    {
        return $input1 ^ $input2;
    }

    /**
     * @param mixed $input1
     * @param mixed $input2
     *
     * @return int
     */
    public function __invoke($input1, $input2)
    {
        return $this->operate($input1, $input2);
    }
}