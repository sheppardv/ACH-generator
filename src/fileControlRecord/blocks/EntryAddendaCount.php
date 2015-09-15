<?php

namespace ach\fileControlRecord\blocks;

use ach\block\FillableNumericBlock;

class EntryAddendaCount extends FillableNumericBlock
{
    public function getRequiredLength()
    {
        return 8;
    }
}