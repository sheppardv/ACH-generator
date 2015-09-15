<?php

namespace ach\header\blocks;

use ach\block\FillableBlock;

class FileCreationTime extends FillableBlock
{
    function __construct($date = false)
    {
        parent::__construct($date);
    }

    protected function getRequiredLength()
    {
        return 4;
    }

    protected function setContent($date = false)
    {
        if(!$date){
            $date = date("Hi");
        }
        $this->_content = $date;
    }
}