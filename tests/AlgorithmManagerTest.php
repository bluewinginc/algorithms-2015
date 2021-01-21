<?php

namespace Bluewing\Algorithms2015\Tests;

use Bluewing\Algorithms2015\AlgorithmManager;
use PHPUnit\Framework\TestCase;

class AlgorithmManagerTest extends TestCase
{
    const ADOLESCENT = 1;
    const ADULT = 2;
    const CHILD = 3;

    /** @test */
    public function it_returns_adolescent_long_term_algorithm()
    {
        $mgr = new AlgorithmManager;

        $algorithm = $mgr->getFor($this::ADOLESCENT, 12);

        $this->assertEquals('Adolescent LT-15', $algorithm->info);
        $this->assertEquals(28.0, $algorithm->clinicalCutoff);
        $this->assertEquals(20.697572, $algorithm->interceptMean);
    }

    /** @test */
    public function it_returns_adult_long_term_algorithm()
    {
        $mgr = new AlgorithmManager;

        $algorithm = $mgr->getFor($this::ADULT, 12);

        $this->assertEquals('Adult LT-15', $algorithm->info);
        $this->assertEquals(25.0, $algorithm->clinicalCutoff);
        $this->assertEquals(20.697572, $algorithm->interceptMean);
    }

    /** @test */
    public function it_returns_child_long_term_algorithm()
    {
        $mgr = new AlgorithmManager;

        $algorithm = $mgr->getFor($this::CHILD, 12);

        $this->assertEquals('Child LT-15', $algorithm->info);
        $this->assertEquals(28.0, $algorithm->clinicalCutoff);
        $this->assertEquals(20.697572, $algorithm->interceptMean);
    }

    /** @test */
    public function it_returns_adolescent_short_term_algorithm()
    {
        $mgr = new AlgorithmManager;

        $algorithm = $mgr->getFor($this::ADOLESCENT, 0);

        $this->assertEquals('Adolescent ST-15', $algorithm->info);
        $this->assertEquals(28.0, $algorithm->clinicalCutoff);
        $this->assertEquals(20.068757, $algorithm->interceptMean);
    }

    /** @test */
    public function it_returns_adult_short_term_algorithm()
    {
        $mgr = new AlgorithmManager;

        $algorithm = $mgr->getFor($this::ADULT, 0);

        $this->assertEquals('Adult ST-15', $algorithm->info);
        $this->assertEquals(25.0, $algorithm->clinicalCutoff);
        $this->assertEquals(20.068757, $algorithm->interceptMean);
    }

    /** @test */
    public function it_returns_child_short_term_algorithm()
    {
        $mgr = new AlgorithmManager;

        $algorithm = $mgr->getFor($this::CHILD, 0);

        $this->assertEquals('Child ST-15', $algorithm->info);
        $this->assertEquals(28.0, $algorithm->clinicalCutoff);
        $this->assertEquals(20.068757, $algorithm->interceptMean);
    }
}