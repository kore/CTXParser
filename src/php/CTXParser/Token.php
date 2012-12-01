<?php
/**
 * This file is part of CTX Parser
 */

namespace CTXParser;

/**
 * Struct class
 */
class Token extends Struct
{
    public $type;
    public $line;
    public $position;
    public $match;

    public function __construct($type, $line, $position, $match)
    {
        $this->type = $type;
        $this->line = $line;
        $this->position = $position;
        $this->match = $match;
    }
}
