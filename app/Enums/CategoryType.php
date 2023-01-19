<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class CategoryType extends Enum
{
    const NEWS = 0;
    const PTPMUD = 1;
    const PTTKHT = 2;

    public static function getCatogory($cat){
        if (self::NEWS == $cat){
            return "Tin tuc";
        }
        elseif (self::PTPMUD == $cat){
            return "Tin moi";
        }
        elseif (self::PTTKHT == $cat){
            return "Tin ";
        }
    }
}
