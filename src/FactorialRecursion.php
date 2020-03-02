<?php

namespace EcPhp\Factorial;

class FactorialRecursion
{
    public function of($integer)
    {
        return 2 > $integer ?
            1 :
            $integer * $this->of($integer - 1);
    }
}
