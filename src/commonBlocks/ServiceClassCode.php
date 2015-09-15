<?php

namespace ach\commonBlocks;

use ach\block\FillableBlock;

class ServiceClassCode extends FillableBlock
{

    const SERVICE_MIXED_DEBITS_CREDITS = 200;
    const SERVICE_CREDITS_ONLY = 220;
    const SERVICE_DEBITS_ONLY = 225;

    protected $_allowed_characters_regexp = "/^[0-9]+$/";

    public function getRequiredLength()
    {
        return 3;
    }
}