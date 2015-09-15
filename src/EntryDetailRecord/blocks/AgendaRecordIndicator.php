<?php

namespace ach\EntryDetailRecord\blocks;

use ach\block\FillableNumericBlock;

class AgendaRecordIndicator extends FillableNumericBlock
{
    public function getRequiredLength()
    {
        return 1;
    }
}