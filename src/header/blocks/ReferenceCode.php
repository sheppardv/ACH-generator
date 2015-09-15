<?php

namespace ach\header\blocks;

use ach\block\NonFillableBlock;

class ReferenceCode extends NonFillableBlock
{

    protected function getRequiredLength()
    {
        return 8;
    }

    protected function setContent()
    {
        $this->_content = str_pad('', 8);
    }
}