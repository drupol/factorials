<?php

namespace spec\EcPhp\Factorial;

use EcPhp\Factorial\FactorialRecursion;
use PhpSpec\ObjectBehavior;

class FactorialRecursionSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(FactorialRecursion::class);
    }

    public function it_can_get_the_factorial_of_5()
    {
        $this
            ->of(5)
            ->shouldBeInt();
    }
}
