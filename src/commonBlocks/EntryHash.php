<?php

namespace ach\commonBlocks;

use ach\block\FillableNumericBlock;

class EntryHash extends FillableNumericBlock
{
    public function getRequiredLength()
    {
        return 10;
    }
}