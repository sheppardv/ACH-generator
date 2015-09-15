<?php

namespace ach\commonBlocks;

use ach\block\FillableBlock;

class RecordTypeCode extends FillableBlock
{
    public function getRequiredLength()
    {
        return 1;
    }

    protected function setContent()
    {
        $this->_content = '1';
    }
}