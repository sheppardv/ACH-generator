<?php

namespace ach\fileControlRecord\blocks;

use ach\block\NonFillableBlock;

class Reserved extends NonFillableBlock
{

    protected function getRequiredLength()
    {
        return 39;
    }

    protected function setContent()
    {
        $this->_content = str_pad('', $this->getRequiredLength());
    }
}