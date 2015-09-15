<?php

namespace tests;

use ach\BatchControlRecord\BatchControlRecord;
use ach\commonBlocks\ServiceClassCode;
use ach\Row;

class BatchControlRecordTest extends \PHPUnit_Framework_TestCase
{
    public function testHeaderHasRequiredLength()
    {
        $batchControlRecord = new BatchControlRecord(
            ServiceClassCode::SERVICE_MIXED_DEBITS_CREDITS,
            1,
            2
        );

        $totalRequiredLength = 0;

        foreach ($batchControlRecord->getBlocks() as $block) {
            $totalRequiredLength += $block->getRequiredLength();
        }


        $this->assertEquals($totalRequiredLength, Row::ROW_LENGTH);
        $this->assertEquals(strlen($batchControlRecord->getRowString()), Row::ROW_LENGTH);
    }
}
