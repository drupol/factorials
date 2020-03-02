<?php

namespace EcPhp\Factorial;

class FactorialRecursionTailCall
{
    public function of($integer, $result = 1)
    {
        return 2 > $integer ?
            $result :
            $this->of($integer - 1, $result * $integer);
    }
}
