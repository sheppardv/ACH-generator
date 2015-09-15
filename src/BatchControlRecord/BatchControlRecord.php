<?php

namespace ach\BatchControlRecord;

use ach\BatchControlRecord\blocks\EntryAndAddendaCount;
use ach\commonBlocks\Amount;
use ach\commonBlocks\BatchNumber;
use ach\commonBlocks\CompanyID;
use ach\commonBlocks\EntryHash;
use ach\commonBlocks\ODFIID;
use ach\commonBlocks\RecordTypeCode;
use ach\commonBlocks\Reserved;
use ach\commonBlocks\ServiceClassCode;
use ach\Row;

/**
 * Class Header
 * @package ach\header
 *
 */
class BatchControlRecord extends Row
{
    const RECORD_TYPE_CODE = '8';

    function __construct(
        $serviceClassCode,
        $totalDebit,
        $totalCredit
    )
    {
        $this->_blocks = [
            new RecordTypeCode(self::RECORD_TYPE_CODE),
            new ServiceClassCode($serviceClassCode),
            new EntryAndAddendaCount('1'),
            new EntryHash('1'),
            new Amount($totalDebit, 12),
            new Amount($totalCredit, 12),
            new CompanyID($totalCredit),
            new Reserved(25),
            new ODFIID(),
            new BatchNumber(1),
        ];
    }

    public function getBlocks()
    {
        return $this->_blocks;
    }
}