<?php

namespace tests;

use ach\EntryDetailRecord\EntryDetailRecord;
use ach\Row;

class EntryDetailRecordTest extends \PHPUnit_Framework_TestCase
{
    public function testHeaderHasRequiredLength()
    {
        $entryDetailRecord = new EntryDetailRecord(
            1, 2, 3, 4, 5, 6
        );

        $totalRequiredLength = 0;

        foreach ($entryDetailRecord->getBlocks() as $block) {
            $totalRequiredLength += $block->getRequiredLength();
        }


        $this->assertEquals($totalRequiredLength, Row::ROW_LENGTH);
        $this->assertEquals(strlen($entryDetailRecord->getRowString()), Row::ROW_LENGTH);
    }
}
