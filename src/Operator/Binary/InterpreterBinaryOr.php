<?php
namespace chilimatic\lib\Interpreter\Operator\Binary;
use chilimatic\lib\Interfaces\IFlyWeightOperate;

/**
 * Class InterpreterBinaryOr
 * @package chilimatic\lib\Interpreter\Operator\Binary
 */
class InterpreterBinaryOr implements IFlyWeightOperate
{
    /**
     * @param $input1
     * @param $input2
     *
     * @return int
     */
    public function operate($input1, $input2)
    {
        return $input1 | $input2;
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