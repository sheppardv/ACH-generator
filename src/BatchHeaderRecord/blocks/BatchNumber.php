<?php

namespace ach\BatchHeaderRecord\blocks;

use ach\block\FillableNumericBlock;

class BatchNumber extends FillableNumericBlock
{
    public function getRequiredLength()
    {
        return 7;
    }
}