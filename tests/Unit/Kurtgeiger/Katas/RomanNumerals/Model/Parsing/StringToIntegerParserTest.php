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

    public function testParsingOfVlue()
    {
        $provider = $this->getMock('Kurtgeiger\Katas\RomanNumerals\Model\Providers\ProvidersInterface');
        $provider
            ->expects($this->once())
            ->method('provideRomanNumeralAsString')
            ->willReturn('IV');

        $validator = $this->getMock('Kurtgeiger\Katas\RomanNumerals\Model\Validation\ValidatorInterface');
        $validator
            ->expects($this->once())
            ->method('validate')
            ->with($this->equalTo('IV'))
            ->willReturn(true);

        $consumer = $this->getMock('Kurtgeiger\Katas\RomanNumerals\Model\Consumers\ConsumersInterface');
        $consumer->expects($this->once())
            ->method('receiveRomanNumeralStringToIntegerConversion')
            ->with($this->equalTo('IV'), $this->equalTo(4))
            ->willReturn(null);

        $parser = new StringToIntegerParser($provider, $validator);

        $parser->parse($consumer);

    }
}