<?php

namespace ach\header\blocks;

use ach\block\NonFillableBlock;

class RecordSize extends NonFillableBlock
{

    public function getRequiredLength()
    {
        return 3;
    }

    protected function setContent()
    {
        $this->_content =  '094';
    }
}