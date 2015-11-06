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
    private $providerMock;
    private $validatorMock;
    private $consumerMock;

    public function setUp()
    {
        $this->providerMock = $this->getMock('Kurtgeiger\Katas\RomanNumerals\Model\Providers\ProvidersInterface');
        $this->validatorMock = $this->getMock('Kurtgeiger\Katas\RomanNumerals\Model\Validation\ValidatorInterface');
        $this->consumerMock = $this->getMock('Kurtgeiger\Katas\RomanNumerals\Model\Consumers\ConsumersInterface');
    }

    public function testItWorks()
    {
        $stringParser = new StringToIntegerParser($this->providerMock, $this->validatorMock, $this->consumerMock);
        $this->assertTrue($stringParser->itWorks());
    }

    public function testParserRecievesAStringFromProvider()
    {
        $this->providerMock->expects($this->once())->method('provideRomanNumeralAsString')->will($this->returnValue('XXVII'));
        $stringParser = new StringToIntegerParser($this->providerMock, $this->validatorMock, $this->consumerMock);

        $expected = 'XXVII';
        $this->assertEquals($expected, $stringParser->getNextRomanNumeralToParse());
    }

    public function testParserValidatesString()
    {
        $this->validatorMock->expects($this->once())->method('validate')->will($this->returnValue(true));
        $stringParser = new StringToIntegerParser($this->providerMock, $this->validatorMock, $this->consumerMock);

        $this->assertTrue($stringParser->validateRomanNumeral('XXVII'));
    }

    public function testParserDoesntValidateNonRomanNumeral()
    {
        $this->validatorMock->expects($this->once())->method('validate')->will($this->returnValue(false));
        $stringParser = new StringToIntegerParser($this->providerMock, $this->validatorMock, $this->consumerMock);

        $this->assertFalse($stringParser->validateRomanNumeral('gsgfgffdgdgdff'));
    }

    public function testRecieveStringToIntegerConversion()
    {
        $this->consumerMock->expects($this->once()->method('receiveRomanNumeralStringToIntegerConversion'))
            ->will($this->returnValue(true));
        $stringParser = new StringToIntegerParser($this->providerMock, $this->validatorMock, $this->consumerMock);

        $this->assertTrue($stringParser->);
    }
}