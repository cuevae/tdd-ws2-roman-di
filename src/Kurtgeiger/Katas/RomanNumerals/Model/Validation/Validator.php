<?php
/**
 * Kurt Geiger Validator
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

namespace Kurtgeiger\Katas\RomanNumerals\Model\Validation;


class Validator implements ValidatorInterface
{

    protected $validIndividualCharacters = ['I', 'V', 'X', 'L', 'C', 'D', 'M'];

    public function itWorks()
    {
        return true;
    }

    /**
     * @param string $romanNumeral
     *
     * @return bool     TRUE if valid, FALSE otherwise
     */
    public function validateRomanNumeralGivenAsString($romanNumeral)
    {
        //Check for single characters
        if (in_array($romanNumeral, $this->validIndividualCharacters)){
            return true;
        }

        return false;
    }
}