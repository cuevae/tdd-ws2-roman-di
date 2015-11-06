<?php
/**
 * Kurt Geiger StringParserTest
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

namespace Kurtgeiger\Katas\RomanNumerals\Model\Parsing\Tests\Unit;


use Kurtgeiger\Katas\RomanNumerals\Model\Parsing\StringToIntegerParser;

class StringToIntegerParserTest extends \PHPUnit_Framework_TestCase
{

    public function testItWorks()
    {
        $this->assertTrue(true);
    }

    public function testParserCanReadFromProvider()
    {
        $providerMock = $this->getMock('Kurtgeiger\Katas\RomanNumerals\Model\Providers\ProvidersInterface');
        $providerMock->expects($this->once())
            ->method('provideRomanNumeralAsString')
            ->will($this->returnValue('XXII'));

        $parser = new StringToIntegerParser($providerMock);
        $providerResult = $parser->readFromProvider();

        $this->assertSame('XXII', $providerResult);
    }

    public function testParserCanValidate()
    {
        $providerMock = $this->getMock('Kurtgeiger\Katas\RomanNumerals\Model\Providers\ProvidersInterface');
        $validatorMock = $this->getMock('Kurtgeiger\Katas\RomanNumerals\Model\Validation\ValidatorInterface');
        $validatorMock->expects($this->once())->method('validate')
        ->will($this->returnValue(true));

        $parser = new StringToIntegerParser($providerMock);

        $this->assertTrue($parser->useValidatorWith($validatorMock, 'XVI'));
    }
}