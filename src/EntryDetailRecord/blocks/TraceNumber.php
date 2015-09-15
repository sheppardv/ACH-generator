<?php

namespace ach\EntryDetailRecord\blocks;

use ach\block\FillableNumericBlock;

class TraceNumber extends FillableNumericBlock
{
    public function getRequiredLength()
    {
        return 7;
    }
}