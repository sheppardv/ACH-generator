<?php

namespace ach\EntryDetailRecord\blocks;

use ach\block\FillableAlphamericBlock;

class IndividualName extends FillableAlphamericBlock
{
    public function getRequiredLength()
    {
        return 22;
    }
}