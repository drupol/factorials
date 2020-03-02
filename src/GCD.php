<?php

namespace EcPhp\Factorial;

class GCD
{
    /**
     * Get the greatest common divisor.
     *
     * @param int $x1
     *   First number
     * @param int $x2
     *   Second number
     *
     * @return int
     *   The greatest common divisor.
     */
    public static function of($x1, $x2)
    {
        while (0 !== $x2) {
            $m = $x1 % $x2;
            $x1 = $x2;
            $x2 = $m;
        }

        return $x1;
    }
}
