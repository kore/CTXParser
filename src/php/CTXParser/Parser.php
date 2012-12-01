<?php
/**
 * This file is part of CTX Parser
 */

namespace CTXParser;

/**
 * Main class to enter parsing process
 */
class Parser
{
    /**
     * Parse the given file
     *
     * @param string $file
     * @return void
     */
    public function parse($file)
    {
        return $this->parseString(file_get_contents($file));
    }

    /**
     * Parse the given string
     *
     * @param string $string
     * @return void
     */
    public function parseString($string)
    {
        // @TODO: Do something
    }
}
