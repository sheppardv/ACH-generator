<?php

namespace ach\fileControlRecord\blocks;

use ach\block\FillableBlock;

class BatchCount extends FillableBlock
{

    protected $_allowed_characters_regexp = "/^[0-9]+$/";

    protected function getRequiredLength()
    {
        return 6;
    }

    protected function setContent($totalNumberOfBatchHeaders)
    {
        $totalNumberOfBatchHeaders = strval($totalNumberOfBatchHeaders);
        $this->_content = str_pad(
            $totalNumberOfBatchHeaders,
            $this->getRequiredLength(),
            '0',
            STR_PAD_LEFT
        );
    }
}