<?php

namespace ach\fileControlRecord\blocks;

use ach\block\NonFillableBlock;

class RecordTypeCode extends NonFillableBlock
{

    protected function getRequiredLength()
    {
        return 1;
    }

    protected function setContent()
    {
        $this->_content = '9';
    }
}