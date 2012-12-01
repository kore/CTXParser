<?php
/**
 * This file is part of CTX Parser
 */

namespace CTXParser;

/**
 * Custom stack implementation
 *
 * A lot faster then using array_shift() on large PHP arrays.
 */
class Stack implements \ArrayAccess, \Countable
{
    /**
     * Data container for the document stack implementation
     *
     * @var array
     */
    protected $data = array();

    /**
     * Number of elements on the stack
     *
     * We are caching this value for faster access performance, and because we
     * are only using a very limited internal methods which actually modify the
     * satck.
     *
     * @var int
     */
    protected $count = 0;

    /**
     * Construct stack from array
     *
     * @param array $array
     * @return void
     */
    public function __construct(array $array = array())
    {
        $this->data  = array_reverse($array);
        $this->count = count($this->data);
    }

    /**
     * Get element from the beginning of the stack
     *
     * @return mixed
     */
    public function shift()
    {
        if (($element = array_pop($this->data)) !== null) {
            --$this->count;
        }
        return $element;
    }

    /**
     * Returns if the given offset exists.
     *
     * This method is part of the ArrayAccess interface to allow access to the
     * data of this object as if it was an array.
     *
     * @param string $key
     * @return bool
     */
    public function offsetExists($key)
    {
        return isset($this->data[$key]);
    }

    /**
     * Returns the element with the given offset.
     *
     * This method is part of the ArrayAccess interface to allow access to the
     * data of this object as if it was an array.
     *
     * @param string $key
     * @return mixed
     *
     * @throws ezcBasePropertyNotFoundException
     *         If no dataset with identifier exists
     */
    public function offsetGet($key)
    {
        $key = $this->count - $key - 1;
        if (!isset($this->data[$key])) {
            throw new \OutOfRangeException("Out of range.");
        }

        return $this->data[$key];
    }

    /**
     * Set the element with the given offset.
     *
     * This method is part of the ArrayAccess interface to allow access to the
     * data of this object as if it was an array.
     *
     * Setting of not yet existing offsets in the stack is not allowed and will
     * return a ezcBaseValueException.
     *
     * @param string $key
     * @param mixed $value
     * @return void
     *
     * @throws ezcBaseValueException
     *         Setting unknown offsets is not allowed
     */
    public function offsetSet($key, $value)
    {
        $key = $this->count - $key - 1;
        if (!isset($this->data[$key])) {
            throw new \OutOfRangeException("Out of range.");
        }

        $this->data[$key] = $value;
    }

    /**
     * Unset the element with the given offset.
     *
     * This method is part of the ArrayAccess interface to allow access to the
     *
     * Is not permitted for this stack implementation.
     *
     * @param string $key
     * @return void
     *
     * @throws ezcBaseValueException
     *         Setting values is not allowed
     */
    public function offsetUnset($key)
    {
        throw new \BadMethodCallException("Unsetting not allowed.");
    }

    /**
     * Returns the number of datasets in the row.
     *
     * This method is part of the Countable interface to allow the usage of
     * PHP's count() function to check how many datasets exist.
     *
     * @return int
     */
    public function count()
    {
        return $this->count;
    }
}
