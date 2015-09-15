<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 9/15/15
 * Time: 10:34 AM
 */

namespace ach\block;


abstract class FillableAlphamericBlock extends FillableBlock
{

    /**
     * @param $content string
     * @throws \ach\ACHException
     */
    function __construct($content)
    {
        $this->setContent($content);
        $this->fillContent();
        $this->_content = strtoupper($this->_content);
        $this->validateContent();
    }

    protected function fillContent()
    {
        $this->_content = str_pad($this->_content, $this->getRequiredLength());
    }
}