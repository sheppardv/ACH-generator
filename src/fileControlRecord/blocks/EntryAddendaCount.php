<?php

namespace ach\fileControlRecord\blocks;

use ach\block\FillableBlock;

class EntryAddendaCount extends FillableBlock
{

    protected $_allowed_characters_regexp = "/^[0-9]+$/";

    protected function getRequiredLength()
    {
        return 8;
    }

    protected function setContent($entryAddendaCount)
    {
        $entryAddendaCount = strval($entryAddendaCount);
        $this->_content = str_pad(
            $entryAddendaCount,
            $this->getRequiredLength(),
            '0',
            STR_PAD_LEFT
        );
    }
}