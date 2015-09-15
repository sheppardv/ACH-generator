<?php

namespace ach\EntryDetailRecord\blocks;

use ach\block\FillableAlphamericBlock;

class DiscretionaryData extends FillableAlphamericBlock
{
    public function getRequiredLength()
    {
        return 2;
    }
}