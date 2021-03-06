<?php

namespace ach\BatchHeaderRecord;

use ach\commonBlocks\BatchNumber;
use ach\BatchHeaderRecord\blocks\CompanyName;
use ach\commonBlocks\ODFIID;
use ach\commonBlocks\RecordTypeCode;
use ach\commonBlocks\Reserved;
use ach\BatchHeaderRecord\blocks\CompanyDescriptiveDate;
use ach\BatchHeaderRecord\blocks\CompanyDiscretionaryData;
use ach\BatchHeaderRecord\blocks\CompanyEntryDescription;
use ach\commonBlocks\CompanyID;
use ach\BatchHeaderRecord\blocks\EffectiveEntryDate;
use ach\BatchHeaderRecord\blocks\OrginatorStatusCode;
use ach\commonBlocks\ServiceClassCode;
use ach\BatchHeaderRecord\blocks\StandardEntryClassCode;
use ach\Row;

/**
 * Class Header
 * @package ach\header
 *
 */
class BatchHeaderRecord extends Row
{
    const RECORD_TYPE_CODE = '5';

    function __construct(
        $serviceClassCode
    )
    {
        $this->_blocks = [
            new RecordTypeCode(self::RECORD_TYPE_CODE),
            new ServiceClassCode($serviceClassCode),
            new CompanyName('1'),
            new CompanyDiscretionaryData('1'),
            new CompanyID('1'),
            new StandardEntryClassCode(StandardEntryClassCode::STATUS_PREARRANGED_PAYMENT_AND_DEPOSIT_ENTRY),
            new CompanyEntryDescription('1'),
            new CompanyDescriptiveDate('1'),
            new EffectiveEntryDate('121323'),
            new Reserved(3),
            new OrginatorStatusCode('1'),
            new ODFIID('1'),
            new BatchNumber('1'),
        ];
    }

    public function getBlocks()
    {
        return $this->_blocks;
    }
}