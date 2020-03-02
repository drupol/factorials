<?php

namespace spec\EcPhp\Factorial;

use EcPhp\Factorial\GCD;
use PhpSpec\ObjectBehavior;

class GCDSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(GCD::class);
    }
}
