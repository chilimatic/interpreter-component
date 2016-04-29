<?php
namespace chilimatic\lib\Interpreter\Operator;
use chilimatic\lib\Interfaces\IFactoryOptions;

/**
 * Class InterpreterOperatorFactory
 * @package chilimatic\lib\Interpreter\Operator
 */
class InterpreterOperatorFactory implements IFactoryOptions
{
    /**
     * @var array
     */
    private $operationMap = [];

    /**
     * @param string $name
     * @param array $options
     *
     * @return mixed
     */
    public function make($name, $options)
    {
        if (!$name) {
            return null;
        }

        if (strpos($name, __NAMESPACE__) === false) {
            $name = __NAMESPACE__ . '\\' . $name;
        }

        if (isset($this->operationMap[$name])) {
            return $this->operationMap[$name];
        }

        if (!class_exists($name, true)) {
            return null;
        }

        $this->operationMap[$name] = new $name($options);

        return $this->operationMap[$name];
    }

    /**
     * @param string $name
     * @param array $options
     *
     * @return mixed
     */
    public function __invoke($name, $options)
    {
        return $this->make($name, $options);
    }
}