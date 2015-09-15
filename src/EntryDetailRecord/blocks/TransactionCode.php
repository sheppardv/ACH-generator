<?php

namespace ach\EntryDetailRecord\blocks;

use ach\block\FillableNumericBlock;

class TransactionCode extends FillableNumericBlock
{
    const PRENOTE_CREDIT_TO_CHECKING = 23;
    const PRENOTE_CREDIT_TO_SAVINGS = 33;

    const MONETARY_CREDIT_TO_CHECKING = 22;
    const MONETARY_CREDIT_TO_SAVINGS = 32;

    const PRENOTE_DEBIT_TO_CHECKING = 28;
    const PRENOTE_DEBIT_TO_SAVINGS = 38;

    const MONETARY_DEBIT_TO_CHECKING = 27;
    const MONETARY_DEBIT_TO_SAVINGS = 37;

    public function getRequiredLength()
    {
        return 2;
    }
}