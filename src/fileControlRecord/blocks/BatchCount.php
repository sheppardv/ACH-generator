<?php

namespace ach\fileControlRecord\blocks;

use ach\block\FillableNumericBlock;

class BatchCount extends FillableNumericBlock
{

    public function getRequiredLength()
    {
        return 6;
    }
}