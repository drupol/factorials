<?php

declare(strict_types=1);

namespace EcPhp\Factorial;

final class Factorial
{
    public function of(int $integer): int
    {
        $factorial = 1;

        for ($i = $integer; 2 <= $i; --$i) {
            $factorial *= $i;
        }

        return $factorial;
    }
}
