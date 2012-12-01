<?php
/**
 * This file is part of CTX Parser
 */

namespace CTXParser\Tokenizer;

use CTXParser\Tokenizer;
use CTXParser\Token;

/**
 * Tokenizer for CTX files
 */
class Regexp extends Tokenizer
{
    /**
     * Expressions for tokenizing the strings.
     *
     * @var array
     */
    protected $expressions = array(
        array(
            'type'  => self::T_WHITESPACE,
            'match' => '(\\A\\s+)S'
        ),
        array(
            'type'  => self::T_COMMENT,
            'match' => '(\\A#.*$)Sm'
        ),
        array(
            'type'  => self::T_STRUCT_START,
            'match' => '(\\A(?P<name>[A-Za-z-]+)\\s+\\{)S'
        ),
        array(
            'type'  => self::T_STRUCT_END,
            'match' => '(\\A\\})S'
        ),
    );

    /**
     * Tokens irrelevant to the parser, which will bee thrown away immediately
     *
     * @var array
     */
    protected $ignoreTokens = array(
        self::T_WHITESPACE,
        self::T_COMMENT,
    );

    /**
     * Tokenize the input string
     *
     * Returns an array of Token structs representing the tokens.
     *
     * @param string $string
     * @return Token[]
     */
    public function tokenize( $string )
    {
        $line     = 1;
        $position = 1;
        $tokens   = array();

        while ( strlen( $string ) ) {
            foreach ( $this->expressions as $rule ) {
                if ( !preg_match( $rule['match'], $string, $match ) ) {
                    continue;
                }

                // Remove matched string from input
                $string = substr( $string, strlen( $match[0] ) );

                // Update position in file
                $line += substr_count( $match[0], "\n" );
                if ( ( $pos = strrpos( $match[0], "\n" ) ) !== false ) {
                    $position  = strrpos( $match[0], "\n" ) + 1;
                } else {
                    $position += strlen( $match[0] );
                }

                // Skip irrelevant rules
                if ( in_array( $rule['type'], $this->ignoreTokens ) ) {
                    continue 2;
                }

                // Add all other rules including their match to the token array
                $match = $this->removeNumericKeys($match);
                $tokens[] = new Token( $rule['type'], $line, $position, $match );
                continue 2;
            }

            throw new \RuntimeException(
                "Could not parse string: '" . substr( $string, 0, 20 ) . "' in line $line at position $position."
            );
        }

        $tokens[] = new Token( self::T_EOF, $line, $position, null );
        return $tokens;
    }

    /**
     * Remove numeric keys from array
     *
     * @param array $array
     * @return array
     */
    protected function removeNumericKeys(array $array)
    {
        foreach ($array as $key => $value) {
            if (!is_string($key)) {
                unset($array[$key]);
            }
        }

        return $array;
    }
}
