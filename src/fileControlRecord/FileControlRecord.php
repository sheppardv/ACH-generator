<?php

namespace ach\fileControlRecord;

use ach\block\Block;

use ach\fileControlRecord\blocks\BatchCount;
use ach\fileControlRecord\blocks\BlockCount;
use ach\fileControlRecord\blocks\EntryAddendaCount;
use ach\fileControlRecord\blocks\EntryHash;
use ach\fileControlRecord\blocks\RecordTypeCode;
use ach\fileControlRecord\blocks\Reserved;
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
            new RecordTypeCode(),
            new BatchCount($totalNumberOfBatchHeaders),
            new BlockCount($totalNumberOfBlocks),
            new EntryAddendaCount($entryAddendaCount),
            new EntryHash($entryHash),
            new TotalDebitEntryDollarAmount($totalDebitEntryDollarAmount),
            new TotalCreditEntryDollarAmount($totalCreditEntryDollarAmount),
            new Reserved(),
        ];
    }
}