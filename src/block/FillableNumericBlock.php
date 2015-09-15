<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 9/15/15
 * Time: 10:34 AM
 */

namespace ach\block;


abstract class FillableNumericBlock extends FillableBlock
{
    protected $_allowed_characters_regexp = "/^[0-9]+$/";

    /**
     * @param $content string
     * @throws \ach\ACHException
     */
    function __construct($content)
    {
        $this->setContent($content);
        $this->fillContent();
        $this->validateContent();
    }

    protected function fillContent()
    {
        $this->_content = str_pad(
            $this->_content,
            $this->getRequiredLength(),
            '0',
            STR_PAD_LEFT
        );
    }
}