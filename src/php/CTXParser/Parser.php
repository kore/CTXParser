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
     * Tokenizer
     *
     * @var mixed
     */
    protected $tokenizer;

    public function __construct(
        Tokenizer $tokenizer = null
    ) {
        $this->tokenizer = $tokenizer ?: new Tokenizer\Regexp();
    }

    /**
     * Parse the given file
     *
     * @param string $file
     * @return AccountInfoList
     */
    public function parse($file)
    {
        return $this->parseString(file_get_contents($file));
    }

    /**
     * Parse the given string
     *
     * @param string $string
     * @return AccountInfoList
     */
    public function parseString($string)
    {
        $tokens = $this->tokenizer->tokenize($string);
        $accountInfoList = $this->reduceStruct($tokens);

        return $accountInfoList;
    }

    /**
     * Read expected from token array
     *
     * Try to read the given token from the token array. If another token is
     * found, a parse error is issued. If the token is found, the token is
     * removed fromt he token array and returned.
     *
     * @param array $types
     * @param Token[] $tokens
     * @return Token
     */
    private function read( array $types, array &$tokens )
    {
        $token = array_shift( $tokens );

        if ( !in_array( $token->type, $types, true ) )
        {
            $names = array();
            foreach ( $types as $type )
            {
                $names[] = $this->tokenizer->getTokenName($type);
            }

            throw new \RuntimeException(
                "Expected one of: " . implode( ', ', $names ) . ", found " . $this->tokenizer->getTokenName($token['type']) . ". in line {$token->line} at position {$token->position}."
            );
        }

        return $token;
    }

    /**
     * Reduce struct
     *
     * @param Token[] $tokens
     * @return Struct
     */
    protected function reduceStruct(array $tokens)
    {
        $start = $this->read(array(Tokenizer::T_STRUCT_START), $tokens);
        $structClassName = __NAMESPACE__ . '\\Values\\' . ucfirst($start->match['name']);
        $struct = new $structClassName();
        $end = $this->read(array(Tokenizer::T_STRUCT_END), $tokens);

        return $struct;
    }
}
