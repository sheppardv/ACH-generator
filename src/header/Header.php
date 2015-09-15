<?php

namespace ach\header;

use ach\commonBlocks\RecordTypeCode;
use ach\header\blocks\BlockingFactor;
use ach\header\blocks\FileCreationDate;
use ach\header\blocks\FileCreationTime;
use ach\header\blocks\FileIDModifier;
use ach\header\blocks\FormatCode;
use ach\header\blocks\ImmediateDestination;
use ach\header\blocks\ImmediateDestinationName;
use ach\header\blocks\ImmediateOrigin;
use ach\header\blocks\ImmediateOriginName;
use ach\header\blocks\PriorityCode;
use ach\header\blocks\RecordSize;
use ach\header\blocks\ReferenceCode;
use ach\Row;

/**
 * Class Header
 * @package ach\header
 */
class Header extends Row
{
    const RECORD_TYPE_CODE = 1;

    protected $_blocks = [];

    function __construct($immediateDestination, $immediateOrigin, $immediateOriginName)
    {
        $this->_blocks = [
            new RecordTypeCode(self::RECORD_TYPE_CODE),
            new PriorityCode(),
            new ImmediateDestination($immediateDestination),
            new ImmediateOrigin($immediateOrigin),
            new FileCreationDate(),
            new FileCreationTime(),
            new FileIDModifier(),
            new RecordSize(),
            new BlockingFactor(),
            new FormatCode(),
            new ImmediateDestinationName(),
            new ImmediateOriginName($immediateOriginName),
            new ReferenceCode(''),
        ];
    }
}