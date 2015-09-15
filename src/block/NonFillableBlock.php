<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 9/15/15
 * Time: 10:34 AM
 */

namespace ach\block;


abstract class NonFillableBlock extends Block
{
    /**
     * @throws \ach\ACHException
     */
    function __construct()
    {
        $this->setContent();
        $this->validateContent();
    }

    abstract protected function setContent();
}