<?php

namespace ach\BatchHeaderRecord\blocks;

use ach\block\NonFillableBlock;

class OrginatorStatusCode extends NonFillableBlock
{

    protected $_allowed_characters_regexp = "/^[0-9]+$/";

    public function getRequiredLength()
    {
        return 1;
    }

    protected function setContent()
    {
        $this->_content = '1';
    }
}