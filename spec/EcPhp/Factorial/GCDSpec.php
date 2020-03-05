<?php

namespace spec\EcPhp\Factorial;

use EcPhp\Factorial\GCD;
use PhpSpec\ObjectBehavior;

class GCDSpec extends ObjectBehavior
{
    public function it_is_able_to_get_the_gcd_of_150_and_120()
    {
        $this::of(150,120)
            ->shouldBeInt();
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(GCD::class);
    }
}
