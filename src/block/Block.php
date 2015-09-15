<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 9/15/15
 * Time: 10:29 AM
 */

namespace ach\block;


use ach\ACHException;

abstract class Block
{
    protected $_allowed_characters_regexp = "/^[0-9A-Z ]+$/";

    protected $_content;

    abstract public function getRequiredLength();

    protected function hasContentAllowedCharacters()
    {
        return (bool)preg_match($this->_allowed_characters_regexp, $this->_content);
    }

    protected function hasContentRequiredLength()
    {
        return strlen($this->_content) == $this->getRequiredLength();
    }

    protected function validateContent()
    {
        if (!$this->hasContentAllowedCharacters()){
            throw new ACHException("Content \"$this->_content\" is not valid: may contain only $this->_allowed_characters_regexp.");
        }

        if (!$this->hasContentRequiredLength()){
            throw new ACHException(
                sprintf(
                    'Content "%s" length mismatch: expected length is %s, actual one is %s.',
                    $this->_content,
                    $this->getRequiredLength(),
                    strlen($this->_content)
                )
            );
        }
    }

    public function getContent()
    {
        return $this->_content;
    }
}