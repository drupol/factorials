<?php

namespace EcPhp\Factorial;

use Traversable;

class Factors
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
    public static function all($num)
    {
        $result = iterator_to_array(self::of($num));

        ksort($result);

        return $result;
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
    public static function of($num, $start = 1)
    {
        if (0 === $num % $start) {
            yield $start => $start;

            yield $num / $start => $num / $start;
        }

        if (ceil(sqrt($num)) >= $start) {
            yield from static::of($num, $start + 1);
        }
    }
}
