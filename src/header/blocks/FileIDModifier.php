<?php

namespace ach\header\blocks;

use ach\block\NonFillableBlock;

class FileIDModifier extends NonFillableBlock
{

    protected function getRequiredLength()
    {
        return 1;
    }

    protected function setContent()
    {
        $this->_content = 'A';
    }
}