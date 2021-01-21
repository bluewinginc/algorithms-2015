<?php

namespace Bluewing\Algorithms2015;

use Bluewing\Algorithms2015\LongTerm\LongTermAdolescent;
use Bluewing\Algorithms2015\LongTerm\LongTermAdult;
use Bluewing\Algorithms2015\LongTerm\LongTermChild;
use Bluewing\Algorithms2015\ShortTerm\ShortTermAdolescent;
use Bluewing\Algorithms2015\ShortTerm\ShortTermAdult;
use Bluewing\Algorithms2015\ShortTerm\ShortTermChild;

class AlgorithmManager
{
    protected const ADOLESCENT = 1;
    // protected const ADULT = 2;
    protected const CHILD = 3;

    public function __construct() {}

    /**
     * Return the algorithm for the specified rater age group and number of scores.
     *
     * @param int $raterAgeGroup
     * @param int $countOfScores
     * @return LongTermAdolescent|LongTermAdult|LongTermChild|ShortTermAdolescent|ShortTermAdult|ShortTermChild
     */
    public function getFor(int $raterAgeGroup, int $countOfScores)
    {
        if ($countOfScores < 9) {
            if ($raterAgeGroup === $this::ADOLESCENT) {
                return new ShortTermAdolescent;
            }

            if ($raterAgeGroup === $this::CHILD) {
                return new ShortTermChild;
            }

            return new ShortTermAdult;
        }

        if ($raterAgeGroup === $this::ADOLESCENT) {
            return new LongTermAdolescent;
        }

        if ($raterAgeGroup === $this::CHILD) {
            return new LongTermChild;
        }

        return new LongTermAdult;
    }
}