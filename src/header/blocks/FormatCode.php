<?php

namespace ach\header\blocks;

use ach\block\NonFillableBlock;

class FormatCode extends NonFillableBlock
{

    public function getRequiredLength()
    {
        return 1;
    }

    protected function setContent()
    {
        $this->_content =  '1';
    }
}