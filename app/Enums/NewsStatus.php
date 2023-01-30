<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class NewsStatus extends Enum
{
    const ACTIVE =   "1";
    const DEACTIVE =   "0";

    public static function getStatus($status){
        if (self::DEACTIVE == $status){
            return "Deactive";
        }
        elseif (self::ACTIVE == $status){
            return "Active";
        }
    }
}
