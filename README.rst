==========
CTX Parser
==========

Parser for CTX files, which are, for example, returned by aqbanking__.

Usage::

    $parser = new CTXParser\Parser();
    $parser->parse("my.ctx");

The parser will return a nested structure of value objects with a full
representation of the CTX file.

I could not find a standard definition for theses files, so I worked with
example files and extended the parser to be able to parse them. If you find
un-parsable CTX files please report issues with attached examples.

You may also just add them unter ``test/CTXParser/_fixtures/`` and extend the
parser accordingly.


..
   Local Variables:
   mode: rst
   fill-column: 79
   End: 
   vim: et syn=rst tw=79
