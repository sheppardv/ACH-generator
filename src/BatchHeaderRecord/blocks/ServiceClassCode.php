<?php

namespace ach\BatchHeaderRecord\blocks;

use ach\block\FillableBlock;

class ServiceClassCode extends FillableBlock
{

    protected $_allowed_characters_regexp = "/^[0-9]+$/";

    public function getRequiredLength()
    {
        return 3;
    }
}