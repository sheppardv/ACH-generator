<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 9/15/15
 * Time: 2:35 PM
 */

namespace tests;


use ach\fileControlRecord\blocks\TotalCreditEntryDollarAmount;

class TestTotalCreditEntryDollarAmount extends \PHPUnit_Framework_TestCase
{
    public function testFloatInput()
    {
        $header = new TotalCreditEntryDollarAmount(12.35);
        $this->assertEquals(strlen($header->getRowString()), Row::ROW_LENGTH);
    }
}
