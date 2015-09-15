<?php

namespace ach\header;

use ach\block\Block;
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
use ach\header\blocks\RecordTypeCode;
use ach\header\blocks\ReferenceCode;
use ach\Row;

/**
 * Class Header
 * @package ach\header
 *
 */
class Header extends Row
{
    protected $_blocks = [];

    function __construct($immediateDestination, $immediateOrigin, $immediateOriginName)
    {
        $this->_blocks = [
            new RecordTypeCode(),
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
            new ReferenceCode(),
        ];
    }

    public function getRowString()
    {
        $rowString = '';
        foreach ($this->_blocks as $block) {
            $rowString .= $block->getContent();
        }

        return $rowString;
    }
}