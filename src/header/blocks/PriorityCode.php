<?php

namespace ach\header\blocks;

use ach\block\NonFillableBlock;

class PriorityCode extends NonFillableBlock
{

    protected function getRequiredLength()
    {
        return 2;
    }

    protected function setContent()
    {
        $this->_content =  '01';
    }
}