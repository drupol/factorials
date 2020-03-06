<?php

namespace spec\EcPhp\Factorial;

use EcPhp\Factorial\FactorialRecursionTailCall;
use PhpSpec\ObjectBehavior;

class FactorialRecursionTailCallSpec extends ObjectBehavior
{
    public function it_can_get_the_factorial_of_0()
    {
        $this
            ->of(0)
            ->shouldReturn(1);
    }

    public function it_can_get_the_factorial_of_1()
    {
        $this
            ->of(1)
            ->shouldReturn(1);
    }

    public function it_can_get_the_factorial_of_5()
    {
        $this
            ->of(5)
            ->shouldReturn(120);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(FactorialRecursionTailCall::class);
    }
}
