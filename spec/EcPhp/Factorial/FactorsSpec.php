<?php

declare(strict_types=1);

namespace spec\EcPhp\Factorial;

use EcPhp\Factorial\Factors;
use PhpSpec\ObjectBehavior;
use tests\EcPhp\Factorial\DuplicateArray;

class FactorsSpec extends ObjectBehavior
{
    public function it_can_get_factors_of_numbers()
    {
        $this::all(15)
            ->shouldReturn([1 => 15, 3 => 5, 5 => 3, 15 => 1]);

        $this::of(15)
            ->shouldYieldLike([1 => 15, 3 => 5, 5 => 3, 15 => 1]);

        $this::of(2)
            ->shouldYieldLike([1 => 2, 2 => 1]);

        $duplicatedArray = new DuplicateArray();
        $duplicatedArray[1] = 1;
        $duplicatedArray[1] = 1;

        $this::of(1)
            ->shouldYieldLike($duplicatedArray);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(Factors::class);
    }
}
