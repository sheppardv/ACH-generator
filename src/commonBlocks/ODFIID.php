<?php

namespace ach\commonBlocks;

use ach\block\NonFillableBlock;

class ODFIID extends NonFillableBlock
{

    protected $_allowed_characters_regexp = "/^[0-9]+$/";

    public function getRequiredLength()
    {
        return 8;
    }

    protected function setContent()
    {
        $this->_content = '12200049';
    }
}