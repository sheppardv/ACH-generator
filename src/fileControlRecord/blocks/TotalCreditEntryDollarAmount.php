<?php

namespace ach\fileControlRecord\blocks;

use ach\block\FillableNumericBlock;

class TotalCreditEntryDollarAmount extends FillableNumericBlock
{
    public function getRequiredLength()
    {
        return 12;
    }
}