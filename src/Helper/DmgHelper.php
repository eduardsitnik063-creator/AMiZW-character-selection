<?php

declare(strict_types=1);


namespace App\Helper;


use Random\RandomException;

class DmgHelper
{
    /**
     * @throws RandomException
     */
    public static function calculateDamage(int $minDmg, int $maxDmg): int
    {
        return random_int($minDmg, $maxDmg);
    }
}
