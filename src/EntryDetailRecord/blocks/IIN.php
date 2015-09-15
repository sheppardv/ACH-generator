<?php

namespace ach\EntryDetailRecord\blocks;

use ach\block\FillableAlphamericBlock;

class IIN extends FillableAlphamericBlock
{
    public function getRequiredLength()
    {
        return 15;
    }
}