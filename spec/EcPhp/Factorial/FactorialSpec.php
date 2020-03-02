<?php

namespace spec\EcPhp\Factorial;

use EcPhp\Factorial\Factorial;
use PhpSpec\ObjectBehavior;

class FactorialSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Factorial::class);
    }
}
