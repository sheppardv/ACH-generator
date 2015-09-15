<?php

namespace ach\header\blocks;

use ach\block\NonFillableBlock;

class BlockingFactor extends NonFillableBlock
{

    public function getRequiredLength()
    {
        return 2;
    }

    protected function setContent()
    {
        $this->_content = '10';
    }
}