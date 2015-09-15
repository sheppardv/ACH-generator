<?php

namespace ach\fileControlRecord\blocks;

use ach\block\FillableNumericBlock;

class EntryHash extends FillableNumericBlock
{
    public function getRequiredLength()
    {
        return 10;
    }
}