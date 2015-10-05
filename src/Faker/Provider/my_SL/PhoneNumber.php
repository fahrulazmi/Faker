<?php

namespace Faker\Provider\my_SL;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @see https://en.wikipedia.org/wiki/National_conventions_for_writing_telephone_numbers#United_States.2C_Canada.2C_and_other_NANP_countries
     */
    protected static $formats = array(
        // Standard formats
        '03-{{areaCode}}####',
    );

    /**
     * NPA-format area code
     *
     * @see https://en.wikipedia.org/wiki/North_American_Numbering_Plan#Numbering_system
     *
     * @return string
     */
    public static function areaCode()
    {
        $digits[] = self::numberBetween(3, 9);
        $digits[] = self::randomDigit();
        $digits[] = self::randomDigitNot($digits[1]);
        $digits[] = self::randomDigit();

        return join('', $digits);
    }
}
