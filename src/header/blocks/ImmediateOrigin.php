<?php

namespace ach\header\blocks;

use ach\block\FillableBlock;

class ImmediateOrigin extends FillableBlock
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