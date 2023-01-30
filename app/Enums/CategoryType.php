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
    const NEWS1 = 1;
    const NEWS2 = 2;

    public static function getCatogory($cat){
        if (self::NEWS == $cat){
            return "Tin tức";
        }
        elseif (self::NEWS1 == $cat){
            return "Tin mới";
        }
        elseif (self::NEWS2 == $cat){
            return "Tin hot";
        }
    }
}
