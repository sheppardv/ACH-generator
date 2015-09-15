<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 9/15/15
 * Time: 10:34 AM
 */

namespace ach\block;


abstract class FillableBlock extends Block
{

    /**
     * @param $content string
     * @throws \ach\ACHException
     */
    function __construct($content)
    {
        $this->setContent($content);
        $this->_content = strtoupper($this->_content);
        $this->validateContent();
    }


    protected function setContent($content)
    {
        $this->_content = $content;
    }
}