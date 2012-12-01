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
    protected $expressions = array();

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
     * Names for the known tokens, for nicer error messages
     *
     * @var array
     */
    protected $tokenNames = array(
        self::T_WHITESPACE    => 'T_WHITESPACE',
        self::T_COMMENT       => 'T_COMMENT',
        self::T_ADDRESS       => 'T_ADDRESS (CSS element addressing queries)',
        self::T_DESC_ADDRESS  => 'T_DESC_ADDRESS (CSS element addressing queries)',
        self::T_ADDRESS_ID    => 'T_ADDRESS_ID (CSS element addressing queries)',
        self::T_ADDRESS_CLASS => 'T_ADDRESS_CLASS (CSS element addressing queries)',
        self::T_DEFINITION    => 'T_DEFINITION (CSS definition addressing element)',
        self::T_START         => 'T_START ("{")',
        self::T_END           => 'T_END ("}")',
        self::T_FORMATTING    => 'T_FORMATTING (formatting specification)',
        self::T_VALUE         => 'T_VALUE (formatting value definition)',
        self::T_EOF           => 'T_EOF (end of file)',
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
     * Common addressing element token
     */
    const T_ADDRESS       = 10;

    /**
     * Direct descendant addressing element token
     */
    const T_DESC_ADDRESS  = 11;

    /**
     * Addressing ID token
     */
    const T_ADDRESS_ID    = 12;

    /**
     * Addressing class token
     */
    const T_ADDRESS_CLASS = 13;

    /**
     * Definition "address" token
     */
    const T_DEFINITION    = 14;

    /**
     * Directive start token
     */
    const T_START         = 20;

    /**
     * Directive end token
     */
    const T_END           = 21;

    /**
     * Formatting rule token
     */
    const T_FORMATTING    = 30;

    /**
     * Formatting rule value token
     */
    const T_VALUE         = 31;

    /**
     * End of file token
     */
    const T_EOF           = 40;
    /**
     * Construct Tokenizer
     *
     * Creates the regular expressions for tokenizing the CTX file.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->expressions = array(
            array(
                'type'  => self::T_WHITESPACE,
                'match' => '(\\A\\s+)S' ),
            array(
                'type'  => self::T_COMMENT,
                'match' => '(\\A/\\*.*\\*/)SUs' ),
            array(
                'type'  => self::T_COMMENT,
                'match' => '(\\A//.*$)Sm' ),
            array(
                'type'  => self::T_START,
                'match' => '(\\A\\{)S' ),
            array(
                'type'  => self::T_END,
                'match' => '(\\A\\})S' ),
            array(
                'type'  => self::T_FORMATTING,
                'match' => '(\\A(?P<name>[A-Za-z-]+)\\s*:)S',
                'to'    => 'formats' ),
            array(
                'state' => 'formats',
                'type'  => self::T_VALUE,
                'match' => '(\\A"(?P<value>[^"]+)"\\s*;)S',
                'to'    => 'default' ),
            array(
                'state' => 'formats',
                'type'  => self::T_VALUE,
                'match' => '(\\A(?P<value>[^;]+?)\\s*;)S',
                'to'    => 'default' ),
            array(
                'type'  => self::T_ADDRESS,
                'match' => '(\\A' . $xmlName . ')S' ),
            array(
                'type'  => self::T_DESC_ADDRESS,
                'match' => '(\\A>[\\t\\x20]+' . $xmlName . ')S' ),
            array(
                'type'  => self::T_ADDRESS_CLASS,
                'match' => '(\\A\\.[A-Za-z_-]+)S' ),
            array(
                'type'  => self::T_ADDRESS_ID,
                'match' => '(\\A#' . $xmlName . ')S' ),
            array(
                'type'  => self::T_DEFINITION,
                'match' => '(\\A@[A-Za-z_-]+)S' ),
        );
    }

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
        $state    = 'default';

        while ( strlen( $string ) )
        {
            foreach ( $this->expressions as $rule )
            {
                if ( ( isset( $rule['state'] ) &&
                       ( $rule['state'] !== $state ) ) ||
                     !preg_match( $rule['match'], $string, $match ) )
                {
                    continue;
                }

                // Remove matched string from input
                $string = substr( $string, strlen( $match[0] ) );

                // Update tokenizer state
                if ( isset( $rule['to'] ) )
                {
                    $state = $rule['to'];
                }

                // Update position in file
                $line     += substr_count( $match[0], "\n" );
                if ( ( $pos = strrpos( $match[0], "\n" ) ) !== false )
                {
                    $position  = strrpos( $match[0], "\n" ) + 1;
                }
                else
                {
                    $position += strlen( $match[0] );
                }

                // Skip irrelevant rules
                if ( in_array( $rule['type'], $this->ignoreTokens ) )
                {
                    continue 2;
                }

                // Add all other rules including their match to the token
                // array
                $tokens[] = array(
                    'type'     => $rule['type'],
                    'line'     => $line,
                    'position' => $position,
                    'match'    => $match,
                );

                continue 2;
            }

            // No matching rule could be found
            return $this->triggerError( E_PARSE,
                "Could not parse string: '" . substr( $string, 0, 20 ) . "' in state: $state.",
                $this->file, $line, $position
            );
        }

        $tokens[] = array(
            'type'     => self::T_EOF,
            'line'     => $line,
            'position' => $position,
            'match'    => null,
        );

        return $tokens;
    }
}
