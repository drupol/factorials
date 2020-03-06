<?php

declare(strict_types=1);

namespace spec\EcPhp\Factorial;

use EcPhp\Factorial\GCD;
use PhpSpec\ObjectBehavior;

class GCDSpec extends ObjectBehavior
{
    public function it_can_get_the_greatest_common_divisor_of_140_and_120()
    {
        $this::of(120, 140)
            ->shouldReturn(20);

        $this::of(17, 34)
            ->shouldReturn(17);

        $this::of(1, 1)
            ->shouldReturn(1);

        $this::of(1, 1, 1)
            ->shouldReturn(1);

        $this::of(3, 4, 5)
            ->shouldReturn(1);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(GCD::class);
    }
}
