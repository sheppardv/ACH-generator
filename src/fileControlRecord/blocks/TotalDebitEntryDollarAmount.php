<?php

namespace ach\fileControlRecord\blocks;

use ach\block\FillableNumericBlock;

class TotalDebitEntryDollarAmount extends FillableNumericBlock
{
    public function getRequiredLength()
    {
        return 12;
    }
}