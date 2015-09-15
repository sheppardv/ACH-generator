<?php

namespace ach\header\blocks;

use ach\block\FillableBlock;

class FileCreationDate extends FillableBlock
{
    function __construct($date = false)
    {
        parent::__construct($date);
    }

    protected function getRequiredLength()
    {
        return 6;
    }

    protected function setContent($date = false)
    {
        if(!$date){
            $date = date("ymd");
        }
        $this->_content = $date;
    }
}