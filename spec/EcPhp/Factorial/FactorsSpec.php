<?php

namespace spec\EcPhp\Factorial;

use EcPhp\Factorial\Factors;
use PhpSpec\ObjectBehavior;

class FactorsSpec extends ObjectBehavior
{
    public function it_is_able_to_get_all_the_factors_of_120()
    {
        $this::all(120)
            ->shouldReturn([
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
                6 => 6,
                8 => 8,
                10 => 10,
                12 => 12,
                15 => 15,
                20 => 20,
                24 => 24,
                30 => 30,
                40 => 40,
                60 => 60,
                120 => 120,
            ]);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(Factors::class);
    }
}
