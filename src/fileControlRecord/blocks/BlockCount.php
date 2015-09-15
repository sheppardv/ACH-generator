<?php

namespace ach\fileControlRecord\blocks;

use ach\block\FillableBlock;

class BlockCount extends FillableBlock
{

    protected $_allowed_characters_regexp = "/^[0-9]+$/";

    protected function getRequiredLength()
    {
        return 6;
    }

    protected function setContent($totalNumberOfBlocks)
    {
        $totalNumberOfBlocks = strval($totalNumberOfBlocks);
        $this->_content = str_pad(
            $totalNumberOfBlocks,
            $this->getRequiredLength(),
            '0',
            STR_PAD_LEFT
        );
    }
}