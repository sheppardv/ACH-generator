<?php

namespace ach\BatchHeaderRecord\blocks;

use ach\block\FillableAlphamericBlock;

class CompanyDiscretionaryData extends FillableAlphamericBlock
{
    public function getRequiredLength()
    {
        return 20;
    }
}