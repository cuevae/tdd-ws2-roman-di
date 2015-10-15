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


use Kurtgeiger\Katas\RomanNumerals\Model\Parsing\StringParser;
use Kurtgeiger\Katas\RomanNumerals\Model\Providers\ProvidersInterface;

class StringParserTest extends \PHPUnit_Framework_TestCase
{

    public function testItWorks()
    {
        /** @var ProvidersInterface $providerMock */
        $providerMock = $this->getMock('Kurtgeiger\Katas\RomanNumerals\Model\Providers\ProvidersInterface');
        $stringParser = new StringParser($providerMock);
        $this->assertTrue($stringParser->itWorks());
    }

    public function testParserReceivesAStringFromProvider()
    {
        /** @var ProvidersInterface $providerMock */
        $providerMock = $this->getMock('Kurtgeiger\Katas\RomanNumerals\Model\Providers\ProvidersInterface');
        $stringParser = new StringParser($providerMock);

        $expected = 'XXVIII';
        $providerMock->expects($this->once())->method('provideRomanNumeralAsString')->will($this->returnValue('XXVIII'));
        $this->assertEquals($expected, $stringParser->getNextRomanNumeralToParse());
    }

}