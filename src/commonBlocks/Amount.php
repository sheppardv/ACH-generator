<?php

namespace ach\commonBlocks;

use ach\block\FillableNumericBlock;

class Amount extends FillableNumericBlock
{
    protected $_requiredLength;

    function __construct($content, $requiredLength)
    {
        $this->_requiredLength = $requiredLength;
        $this->setContent($content);
        $this->fillContent();
        $this->validateContent();
    }


    public function getRequiredLength()
    {
        return $this->_requiredLength;
    }
}