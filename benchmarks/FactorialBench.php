<?php

declare(strict_types=1);

namespace Bench\EcPhp\Factorial;

use EcPhp\Factorial\Factorial;
use PhpBench\Benchmark\Metadata\Annotations\BeforeMethods;
use PhpBench\Benchmark\Metadata\Annotations\Groups;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\ParamProviders;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

/**
 * @BeforeMethods({"init"})
 * @Groups({"Factorials"})
 */
class FactorialBench
{
    /**
     * @var Factorial
     */
    private $subject;

    /**
     * @Revs(10000)
     * @Iterations(100)
     * @ParamProviders({"provideSubjectParam"})
     *
     * @param mixed $params
     */
    public function benchCalculateFactorialOf($params)
    {
        $this->subject->of($params['number']);
    }

    public function init()
    {
        $this->subject = new Factorial();
    }

    public function provideSubjectParam()
    {
        yield 0 => ['number' => 0];

        yield 1 => ['number' => 1];

        yield 5 => ['number' => 5];

        yield 10 => ['number' => 10];
    }
}
