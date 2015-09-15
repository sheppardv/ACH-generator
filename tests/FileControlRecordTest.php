<?php

namespace tests;

use ach\fileControlRecord\FileControlRecord;
use ach\Row;

class FileControlRecordTest extends \PHPUnit_Framework_TestCase
{
    public function testHeaderHasRequiredLength()
    {
        $fileControlRecord = new FileControlRecord(
            12,
            12,
            13,
            14,
            35,
            26
        );
        $this->assertEquals(strlen($fileControlRecord->getRowString()), Row::ROW_LENGTH);
    }
}
