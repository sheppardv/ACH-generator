<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 9/15/15
 * Time: 1:21 PM
 */

namespace ach;

use ach\block\Block;

/**
 * Class Row
 * @package ach
 * @property Block[] $_blocks
 */
abstract class Row
{
    const ROW_LENGTH = 94;

    public function getRowString()
    {
        $rowString = '';
        foreach ($this->_blocks as $block) {
            $rowString .= $block->getContent();
        }

        return $rowString;
    }
}