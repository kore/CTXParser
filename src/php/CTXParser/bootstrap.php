<?php
/**
 * This file is part of CTX Parser
 */

namespace CTXParser;

// @codeCoverageIgnoreStart
// @codingStandardsIgnoreStart

// require __DIR__ . '/../../library/autoload.php';

spl_autoload_register(
    function ( $class )
    {
        if ( 0 === strpos( $class, __NAMESPACE__ ) )
        {
            include __DIR__ . '/../' . strtr( $class, '\\', '/' ) . '.php';
        }
    }
);

// @codingStandardsIgnoreEnd
// @codeCoverageIgnoreEnd
