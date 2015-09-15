<?php

namespace ach\fileControlRecord;

use ach\block\Block;

use ach\commonBlocks\RecordTypeCode;
use ach\commonBlocks\Reserved;
use ach\fileControlRecord\blocks\BatchCount;
use ach\fileControlRecord\blocks\BlockCount;
use ach\fileControlRecord\blocks\EntryAddendaCount;
use ach\fileControlRecord\blocks\EntryHash;
use ach\fileControlRecord\blocks\TotalCreditEntryDollarAmount;
use ach\fileControlRecord\blocks\TotalDebitEntryDollarAmount;
use ach\Row;

/**
 * Class Header
 * @package ach\header
 *
 * @property Block[] $_blocks
 */
class FileControlRecord extends Row
{
    protected $_blocks = [];
    const RECORD_TYPE_CODE = '9';

    function __construct(
        $totalNumberOfBatchHeaders,
        $totalNumberOfBlocks,
        $entryAddendaCount,
        $entryHash,
        $totalDebitEntryDollarAmount,
        $totalCreditEntryDollarAmount
    )
    {
        $this->_blocks = [
            new RecordTypeCode(self::RECORD_TYPE_CODE),
            new BatchCount($totalNumberOfBatchHeaders),
            new BlockCount($totalNumberOfBlocks),
            new EntryAddendaCount($entryAddendaCount),
            new EntryHash($entryHash),
            new TotalDebitEntryDollarAmount($totalDebitEntryDollarAmount),
            new TotalCreditEntryDollarAmount($totalCreditEntryDollarAmount),
            new Reserved(39),
        ];
    }
}