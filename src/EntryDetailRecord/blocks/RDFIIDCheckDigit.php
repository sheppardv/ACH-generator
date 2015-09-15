<?php

namespace ach\EntryDetailRecord\blocks;

use ach\block\FillableNumericBlock;

class RDFIIDCheckDigit extends FillableNumericBlock
{
    public function getRequiredLength()
    {
        return 1;
    }
}