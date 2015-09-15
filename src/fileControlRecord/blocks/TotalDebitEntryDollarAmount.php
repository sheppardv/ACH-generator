<?php

namespace ach\fileControlRecord\blocks;

use ach\block\FillableBlock;

class TotalDebitEntryDollarAmount extends FillableBlock
{
    protected $_allowed_characters_regexp = "/^[0-9]+$/";

    protected function getRequiredLength()
    {
        return 12;
    }

    protected function setContent($totalDebitEntryDollarAmount)
    {
        $totalCreditEntryDollarAmount = strval($totalDebitEntryDollarAmount);
        $this->_content = str_pad(
            $totalCreditEntryDollarAmount,
            $this->getRequiredLength(),
            '0',
            STR_PAD_LEFT
        );
    }
}