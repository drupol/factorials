<?php

namespace spec\EcPhp\Factorial;

use EcPhp\Factorial\FactorialRecursionTailCall;
use PhpSpec\ObjectBehavior;

class FactorialRecursionTailCallSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(FactorialRecursionTailCall::class);
    }

    public function it_can_get_the_factorial_of_5()
    {
        $this
            ->of(5)
            ->shouldBeInt();
    }
}
