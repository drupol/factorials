<?php

declare(strict_types=1);

namespace Bench\EcPhp\Factorial;

use EcPhp\Factorial\GCD;
use PhpBench\Benchmark\Metadata\Annotations\Groups;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\ParamProviders;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

/**
 * @Groups({"GCD"})
 */
class GCDBench
{
    /**
     * @Revs(10000)
     * @Iterations(100)
     * @ParamProviders({"provideSubjectParam"})
     *
     * @param mixed $params
     */
    public function benchCalculateGCDOf($params)
    {
        GCD::of($params['a'], $params['b']);
    }

    public function provideSubjectParam()
    {
        yield 0 => ['a' => 10, 'b' => 30];

        yield 1 => ['a' => 20, 'b' => 65];

        yield 2 => ['a' => 60, 'b' => 144];

        yield 3 => ['a' => 160, 'b' => 120];
    }
}
