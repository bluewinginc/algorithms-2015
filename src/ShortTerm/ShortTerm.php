<?php

namespace Bluewing\Algorithms2015\ShortTerm;

use Bluewing\Algorithms2015\Algorithm;
use Bluewing\Algorithms2015\AlgorithmStruct;

abstract class ShortTerm extends AlgorithmStruct implements Algorithm
{
    public $info = 'ST-15';
    public $minMeetings = 1;
    public $maxMeetings = 8;
    public $flattenMeeting = 6;
    public $interceptMean = 20.068757;
    public $linearMean = 4.204393;
    public $quadraticMean = -0.830554;
    public $cubicMean = 0.061602;
    public $intake = 0.985226;
    public $linearByIntake = -0.355655;
    public $quadraticByIntake = 0.087643;
    public $cubicByIntake = -0.007101;
    public $reliableChangeIndex = 6.00;
    public $standardDeviation = 8.00;
    public $clinicalCutoff = 25.0;

    /**
     * Return the object as an array.
     *
     * @return array
     */
    public function toArray() : array
    {
        return $this->structToArray();
    }
}