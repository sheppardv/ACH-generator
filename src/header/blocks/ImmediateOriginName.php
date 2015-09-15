<?php

namespace ach\header\blocks;

use ach\block\FillableAlphamericBlock;

class ImmediateOriginName extends FillableAlphamericBlock
{
    public function getRequiredLength()
    {
        return 23;
    }
}