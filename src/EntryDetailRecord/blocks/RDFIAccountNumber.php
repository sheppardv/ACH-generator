<?php

namespace ach\EntryDetailRecord\blocks;

use ach\block\FillableAlphamericBlock;

class RDFIAccountNumber extends FillableAlphamericBlock
{
    public function getRequiredLength()
    {
        return 17;
    }
}