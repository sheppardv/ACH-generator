<?php

namespace ach\commonBlocks;

use ach\block\NonFillableBlock;

class Reserved extends NonFillableBlock
{
    protected $_length;

    function __construct($length)
    {
        $this->_length = $length;
        $this->setContent();
        $this->validateContent();
    }


    public function getRequiredLength()
    {
        return $this->_length;
    }

    protected function setContent()
    {
        $this->_content = str_pad('', $this->getRequiredLength());
    }
}