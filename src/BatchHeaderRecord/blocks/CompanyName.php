<?php

namespace ach\BatchHeaderRecord\blocks;

use ach\block\FillableAlphamericBlock;

class CompanyName extends FillableAlphamericBlock
{
    public function getRequiredLength()
    {
        return 16;
    }
}