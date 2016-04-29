<?php

namespace chilimatic\lib\Interpreter\Type;
use chilimatic\lib\Interfaces\IFlyWeightExecute;

/**
 * Class InterpreterTypeBoolean
 * @package chilimatic\lib\Interpreter\Type
 */
class InterpreterTypeBoolean implements IFlyWeightExecute
{
    /**
     * @var string
     */
    const PATTERN = "/^(true|false|0|1)$/";

    /**
     * @param string $string
     *
     * @return bool|null
     */
    public function execute($string)
    {
        $string = strtolower((string) $string);
        if (!preg_match(self::PATTERN, $string)) {
            return null;
        }

        if ($string{0} === 't' || $string{0} === '1') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $input
     *
     * @return bool|null
     */
    public function __invoke($input)
    {
        return $this->execute($input);
    }
}