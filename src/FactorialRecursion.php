<?php

declare(strict_types=1);

namespace EcPhp\Factorial;

final class FactorialRecursion
{
    public function of(int $integer): int
    {
        return 2 > $integer ?
            1 :
            $integer * $this->of($integer - 1);
    }
}
