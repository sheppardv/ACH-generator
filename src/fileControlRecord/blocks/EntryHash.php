<?php

namespace ach\fileControlRecord\blocks;

use ach\block\FillableBlock;

class EntryHash extends FillableBlock
{

    protected $_allowed_characters_regexp = "/^[0-9]+$/";

    protected function getRequiredLength()
    {
        return 10;
    }

    protected function setContent($entryHash)
    {
        $entryHash = strval($entryHash);
        $this->_content = str_pad(
            $entryHash,
            $this->getRequiredLength(),
            '0',
            STR_PAD_LEFT
        );
    }
}