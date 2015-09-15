<?php

namespace tests;

use ach\header\Header;
use ach\Row;

class HeaderTest extends \PHPUnit_Framework_TestCase
{
    public function testHeaderHasRequiredLength()
    {
        $header = new Header(123456789, "qwertyuio", "some string here");
        $this->assertEquals(strlen($header->getRowString()), Row::ROW_LENGTH);
    }
}
