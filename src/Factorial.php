<?php

namespace EcPhp\Factorial;

class Factorial
{
    public function of($integer)
    {
        $factorial = 1;

        foreach (range(1, $integer) as $i) {
            $factorial *= $i;
        }

        return $factorial;
    }
}
