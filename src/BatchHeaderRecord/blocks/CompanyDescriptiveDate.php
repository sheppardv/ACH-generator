<?php

namespace ach\BatchHeaderRecord\blocks;

use ach\block\FillableAlphamericBlock;

class CompanyDescriptiveDate extends FillableAlphamericBlock
{
    public function getRequiredLength()
    {
        return 6;
    }
}