<?php

namespace ach\BatchControlRecord\blocks;

use ach\block\FillableNumericBlock;

class EntryAndAddendaCount extends FillableNumericBlock
{
    public function getRequiredLength()
    {
        return 6;
    }
}