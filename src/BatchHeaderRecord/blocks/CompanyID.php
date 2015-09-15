<?php

namespace ach\BatchHeaderRecord\blocks;

use ach\block\FillableAlphamericBlock;

class CompanyID extends FillableAlphamericBlock
{
    public function getRequiredLength()
    {
        return 10;
    }
}