<?php

namespace spec\EcPhp\Factorial;

use EcPhp\Factorial\Factors;
use PhpSpec\ObjectBehavior;

class FactorsSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Factors::class);
    }
}
