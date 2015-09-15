<?php

namespace ach\EntryDetailRecord\blocks;

use ach\block\FillableNumericBlock;

class Amount extends FillableNumericBlock
{
    public function getRequiredLength()
    {
        return 10;
    }
}