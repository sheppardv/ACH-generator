<?php

namespace ach\fileControlRecord\blocks;

use ach\block\FillableNumericBlock;

class BlockCount extends FillableNumericBlock
{
    public function getRequiredLength()
    {
        return 6;
    }
}