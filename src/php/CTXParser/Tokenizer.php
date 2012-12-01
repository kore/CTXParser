<?php
/**
 * This file is part of CTX Parser
 */

namespace CTXParser;

/**
 * Tokenizer for CTX files
 */
abstract class Tokenizer
{
    /**
     * Token names
     *
     * @var array
     */
    protected $tokenNames = array(
        self::T_WHITESPACE   => "T_WHITESPACE",
        self::T_COMMENT      => "T_COMMENT",
        self::T_EOF          => "T_EOF",
        self::T_STRUCT_START => "T_STRUCT_START",
        self::T_STRUCT_END   => "T_STRUCT_END",
        self::T_VALUE        => "T_VALUE",
        self::T_ARRAY_VALUE  => "T_ARRAY_VALUE",
    );

    /**
     * Whitespace token
     */
    const T_WHITESPACE    = 1;

    /**
     * Comment token
     */
    const T_COMMENT       = 2;

    /**
     * End Of File token
     */
    const T_EOF           = 3;

    /**
     * Start of a struct
     */
    const T_STRUCT_START  = 10;

    /**
     * End of a struct
     */
    const T_STRUCT_END    = 11;

    /**
     * Value
     */
    const T_VALUE         = 20;

    /**
     * Array Value
     */
    const T_ARRAY_VALUE   = 21;

    /**
     * Tokenize the input string
     *
     * Returns an array of Token structs representing the tokens.
     *
     * @param string $string
     * @return Token[]
     */
    abstract public function tokenize( $string );

    /**
     * Get token name
     *
     * @param int $type
     * @return string
     */
    public function getTokenName($type)
    {
        if (!isset($this->tokenNames[$type])) {
            throw new \RuntimeException(
                "Unknown token $type."
            );
        }

        return $this->tokenNames[$type];
    }
}
