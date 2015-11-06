<?php
/**
 * Kurt Geiger StringParser
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

namespace Kurtgeiger\Katas\RomanNumerals\Model\Parsing;


use Kurtgeiger\Katas\RomanNumerals\Model\Consumers\ConsumersInterface;
use Kurtgeiger\Katas\RomanNumerals\Model\Providers\ProvidersInterface;
use Kurtgeiger\Katas\RomanNumerals\Model\Validation\ValidatorInterface;

class StringToIntegerParser implements ParserInterface
{
    private $_provider;
    private $_validator;
    private $_consumer;

    public function __construct(
        ProvidersInterface $providersInterface,
        ValidatorInterface $validatorInterface,
        ConsumersInterface $consumersInterface
    )
    {
        $this->_provider = $providersInterface;
        $this->_validator = $validatorInterface;
        $this->_consumer = $consumersInterface;
    }

    public function itWorks()
    {
        return true;
    }

    public function getNextRomanNumeralToParse()
    {
        return $this->_provider->provideRomanNumeralAsString();
    }

    public function validateRomanNumeral($input)
    {
        return $this->_validator->validate($input);
    }

    public function
}