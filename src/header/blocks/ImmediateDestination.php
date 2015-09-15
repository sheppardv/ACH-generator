<?php

namespace ach\header\blocks;

use ach\block\FillableBlock;

class ImmediateDestination extends FillableBlock
{

    public function getRequiredLength()
    {
        return 10;
    }

    protected function setContent($UBCompanyID)
    {
        $this->_content = " $UBCompanyID";
    }
}