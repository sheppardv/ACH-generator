<?php

namespace ach\header\blocks;

use ach\block\FillableAlphamericBlock;

class ReferenceCode extends FillableAlphamericBlock
{

    public function getRequiredLength()
    {
        return 8;
    }
}