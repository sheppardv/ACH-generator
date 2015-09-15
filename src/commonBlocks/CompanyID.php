<?php

namespace ach\commonBlocks;

use ach\block\FillableAlphamericBlock;

class CompanyID extends FillableAlphamericBlock
{
    public function getRequiredLength()
    {
        return 10;
    }
}