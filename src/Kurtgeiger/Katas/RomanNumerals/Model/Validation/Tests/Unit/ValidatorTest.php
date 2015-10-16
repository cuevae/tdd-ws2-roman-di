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


use Kurtgeiger\Katas\RomanNumerals\Model\Validation\Validator;

class ValidatorTest extends \PHPUnit_Framework_TestCase
{

    public function testItWorks()
    {
        $validator = new Validator();
        $this->assertTrue($validator->itWorks());
    }

    public function testValidatorDetectsAnIncorrectRomanNumeralString()
    {
        //Setup
        $expected = false;
        $input = 'IC';
        $validator = new Validator();

        //Run
        $actual = $validator->validateRomanNumeralGivenAsString($input);

        //Test
        $this->assertSame($expected, $actual);
    }

}