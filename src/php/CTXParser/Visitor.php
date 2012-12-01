<?php
/**
 * This file is part of CTX Parser
 */

namespace CTXParser;

use CTXParser\CTX\AccountInfoList;

/**
 * Base class for visitor implementations
 */
abstract class Visitor
{
    /**
     * Visit account info list
     *
     * @param AccountInfoList $accountList
     * @return mixed
     */
    abstract public function visit(AccountInfoList $accountList);
}
