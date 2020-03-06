<?php

declare(strict_types=1);

namespace EcPhp\Factorial;

final class GCD
{
    /**
     * Get the greatest common divisor.
     *
     * @param int ...$x
     *   The numbers.
     *
     * @return int
     *   The greatest common divisor.
     */
    public static function of(...$x): int
    {
        return array_reduce($x, [__CLASS__, 'gcd']);
    }

    /**
     * @param int $a
     * @param int $b
     *
     * @return int
     */
    private static function gcd($a, $b): int
    {
        return 0 === $b ? $a : self::gcd($b, $a % $b);
    }
}
