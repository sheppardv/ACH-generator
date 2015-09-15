<?php

namespace ach\header\blocks;

use ach\block\NonFillableBlock;

class ImmediateDestinationName extends NonFillableBlock
{
    public function getRequiredLength()
    {
        return 23;
    }

    protected function setContent()
    {
        $this->_content =  str_pad("UNION BANK", $this->getRequiredLength());
    }
}