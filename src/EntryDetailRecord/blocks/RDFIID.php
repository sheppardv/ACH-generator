<?php

namespace ach\EntryDetailRecord\blocks;

use ach\block\FillableNumericBlock;

class RDFIID extends FillableNumericBlock
{
    public function getRequiredLength()
    {
        return 8;
    }
}