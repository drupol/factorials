<?php

declare(strict_types=1);

namespace EcPhp\Factorial;

final class FactorialRecursionTailCall
{
    public function of(int $integer, int $result = 1): int
    {
        return 2 > $integer ?
            $result :
            $this->of($integer - 1, $result * $integer);
    }
}
