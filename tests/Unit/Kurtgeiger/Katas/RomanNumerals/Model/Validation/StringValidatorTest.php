<?php
/**
 * Kurt Geiger ValidatorTest
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 *
 * @category
 * @package
 * @copyright  Copyright (c) 2015 Kurt Geiger (http://www.kurtgeiger.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Kurtgeiger\Katas\RomanNumerals\Model\Validation\Tests\Unit;


class StringValidatorTest extends \PHPUnit_Framework_TestCase
{

    //So getting the rulez from the internet..
    //1. A letter can only be repeated three times, except for V, L and D
    //      i.e. III, XXX, CCC, MMM are correct
    //      VVV, LLL, DDD are not correct
    //2. Letters placed after another letter of higher value are correct, i.e. CV, XI, MI, MCVI
    //3. Letters placed before another letter of higher value are only correct if their order
    //   indexes have a difference of 1 or 2, i.e. IV, IX but not IL (index difference > 2), and
    //      a. If index diff is 1, the total value is not already represented by a single character,
    //          i.e. IV, XL, CD are correct;
    //              VX not correct because there's already a letter for 5: V,
    //              DM not correct because there's already a letter for 500: D
    //      b. If index diff is 2, the total value is not a multiple of 9 and 5, i.e. XC, CM, IX, are correct
    //              LD not correct since 450 is multiple of 9 and 5
    //              VL not correct since 45 is multiple of 9 and 5

    public function testItWorks()
    {
        $this->assertTrue(true);
    }

}