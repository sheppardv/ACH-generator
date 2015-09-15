<?php

namespace ach\BatchHeaderRecord\blocks;

use ach\block\FillableAlphamericBlock;

class StandardEntryClassCode extends FillableAlphamericBlock
{
    const STATUS_PREARRANGED_PAYMENT_AND_DEPOSIT_ENTRY = 'PDP';

    public function getRequiredLength()
    {
        return 3;
    }
}