<?php

namespace ach\header\blocks;

use ach\block\FillableBlock;

class ImmediateOriginName extends FillableBlock
{

    protected function getRequiredLength()
    {
        return 23;
    }

    protected function setContent($immediateOriginName)
    {
        $this->_content = str_pad($immediateOriginName, $this->getRequiredLength());
    }
}