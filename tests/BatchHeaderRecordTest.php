<?php

namespace tests;

use ach\BatchHeaderRecord\BatchHeaderRecord;
use ach\Row;

class BatchHeaderRecordTest extends \PHPUnit_Framework_TestCase
{
    public function testHeaderHasRequiredLength()
    {
        $batchHeaderRecord = new BatchHeaderRecord(
            BatchHeaderRecord::SERVICE_MIXED_DEBITS_CREDITS
        );

        $totalRequiredLength = 0;

        foreach ($batchHeaderRecord->getBlocks() as $block) {
            $totalRequiredLength += $block->getRequiredLength();
        }


        $this->assertEquals($totalRequiredLength, Row::ROW_LENGTH);
        $this->assertEquals(strlen($batchHeaderRecord->getRowString()), Row::ROW_LENGTH);
    }
}
