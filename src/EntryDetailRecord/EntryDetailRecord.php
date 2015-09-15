<?php

namespace ach\EntryDetailRecord;

use ach\commonBlocks\ODFIID;
use ach\commonBlocks\RecordTypeCode;
use ach\EntryDetailRecord\blocks\AgendaRecordIndicator;
use ach\commonBlocks\Amount;
use ach\EntryDetailRecord\blocks\DiscretionaryData;
use ach\EntryDetailRecord\blocks\IIN;
use ach\EntryDetailRecord\blocks\IndividualName;
use ach\EntryDetailRecord\blocks\RDFIAccountNumber;
use ach\EntryDetailRecord\blocks\RDFIID;
use ach\EntryDetailRecord\blocks\RDFIIDCheckDigit;
use ach\EntryDetailRecord\blocks\TraceNumber;
use ach\EntryDetailRecord\blocks\TransactionCode;
use ach\Row;

/**
 * Class Header
 * @package ach\header
 *
 */
class EntryDetailRecord extends Row
{
    const RECORD_TYPE_CODE = '6';

    function __construct(
        $transactionCode,
        $RDFIID,
        $RDFIAccountNumber,
        $amount,
        $iin,
        $name
    )
    {
        $this->_blocks = [
            new RecordTypeCode(self::RECORD_TYPE_CODE),
            new TransactionCode($transactionCode),
            new RDFIID($RDFIID),
            new RDFIIDCheckDigit($RDFIID),
            new RDFIAccountNumber($RDFIAccountNumber),
            new Amount($amount, 10),
            new IIN($iin),
            new IndividualName($name),
            new DiscretionaryData(''),
            new AgendaRecordIndicator('0'),
            new ODFIID(),
            new TraceNumber('1'),
        ];
    }

    public function getBlocks()
    {
        return $this->_blocks;
    }
}