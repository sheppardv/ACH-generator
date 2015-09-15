<?php

namespace ach\BatchHeaderRecord\blocks;

use ach\block\FillableNumericBlock;

class EffectiveEntryDate extends FillableNumericBlock
{
    public function getRequiredLength()
    {
        return 6;
    }
}