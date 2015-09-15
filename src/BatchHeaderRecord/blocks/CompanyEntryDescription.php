<?php

namespace ach\BatchHeaderRecord\blocks;

use ach\block\FillableAlphamericBlock;

class CompanyEntryDescription extends FillableAlphamericBlock
{
    public function getRequiredLength()
    {
        return 10;
    }
}