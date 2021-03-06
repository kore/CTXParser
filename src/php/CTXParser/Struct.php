<?php
/**
 * This file is part of CTX Parser
 */

namespace CTXParser;

/**
 * Base class for structs
 */
abstract class Struct
{
    /**
     * Generic constructor
     *
     * @param array $values
     * @return void
     */
    public function __construct(array $values = array())
    {
        foreach ($values as $name => $value) {
            $this->$name = $value;
        }
    }

    /**
     * Fail on unknown values with exception
     *
     * @param string $name
     * @return void
     */
    public function __get($name)
    {
        throw new \OutOfRangeException("Unknown property \${$name} in " . get_class($this));
    }

    /**
     * Fail on unknown values with exception
     *
     * @param string $name
     * @param mxied $value
     * @return void
     */
    public function __set($name, $value)
    {
        // We just trigger a warning here and do not throw an exception since
        // new properties seem to occur from time to time.
        trigger_error("Unknown property \${$name} in " . get_class($this));
    }

    /**
     * Fail on unknown values with exception
     *
     * @param string $name
     * @return void
     */
    public function __unset($name)
    {
        throw new \OutOfRangeException("Unknown property \${$name} in " . get_class($this));
    }

    /**
     * Reconstruct value state
     *
     * @param array $values
     * @return Struct
     */
    public static function __set_state(array $values)
    {
        return new static($values);
    }
}
