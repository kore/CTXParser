<?php
/**
 * This file is part of CTX Parser
 */

namespace CTXParser;

class ParserTest extends \PHPUnit_Framework_TestCase
{
    public function getParsableFiles()
    {
        return array_map(
            function ($file) {
                return array($file);
            },
            glob(__DIR__ . '/_fixtures/*.ctx')
        );
    }

    /**
     * @dataProvider getParsableFiles
     */
    public function testParse($file)
    {
        $parser = new Parser();
        $account = $parser->parse($file);

        if (!file_exists($expectation = $file . '.php')) {
            file_put_contents(
                $expectation . '.generated',
                "<?php\n\nreturn " . var_export($account, true) . ";\n"
            );
            $this->markTestIncomplete("Expectation file $expectation does not exist yet.");
        }

        $this->assertEquals(
            include $expectation,
            $account
        );
    }
}
