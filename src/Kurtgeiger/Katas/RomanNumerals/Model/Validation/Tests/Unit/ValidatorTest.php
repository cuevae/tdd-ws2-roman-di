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

    /**
     * @dataProvider incorrectRomanNumeralStrings
     * @param string $input
     */
    public function testValidatorDetectsAnIncorrectRomanNumeralString($input)
    {
        //Setup
        $expected = false;
        $validator = new Validator();

        //Run
        $actual = $validator->validateRomanNumeralGivenAsString($input);

        //Test
        $this->assertSame($expected, $actual);
    }

    /**
     * @dataProvider correctRomanNumeralStrings
     * @param string $input
     */
    public function testValidatorDetectsACorrectRomanNumeralString($input)
    {
        $expected = true;
        $validator = new Validator();

        $actual = $validator->validateRomanNumeralGivenAsString($input);

        $this->assertSame($expected, $actual);
    }

    public function incorrectRomanNumeralStrings()
    {
        return array(
            array('IC'),
            array('IL'),
            array('ID'),
            array('IM'),
            array('LM'),
        );
    }

    public function correctRomanNumeralStrings()
    {
        return array(
            array('I'),
            array('V'),
            array('X'),
            array('L'),
            array('D'),
            array('M'),
            array('IV'),
        );
    }

}