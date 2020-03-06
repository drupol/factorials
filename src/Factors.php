<?php

declare(strict_types=1);

namespace EcPhp\Factorial;

use Traversable;

final class Factors
{
    /**
     * Get all the divisors at once.
     *
     * @param int $num
     *   The number.
     *
     * @return array<int>
     *   The divisors of the number.
     */
    public static function all(int $num): array
    {
        return iterator_to_array(self::of($num));
    }

    /**
     * Get the divisor of a given number.
     *
     * @param int $num
     *   The number.
     * @param int $start
     *   The start.
     *
     * @return Traversable<int>
     *   The divisors of the number.
     */
    public static function of(int $num, int $start = 1)
    {
        if (0 !== $num % $start) {
            return yield from self::of($num, $start + 1);
        }

        yield $start => $num / $start;

        if (($start + 1 < $num) && ceil(sqrt($num)) >= $start) {
            return yield from self::of($num, $start + 1);
        }

        yield $num => 1;
    }
}
