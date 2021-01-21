<?php

namespace Bluewing\Algorithms2015\LongTerm;

use Bluewing\Algorithms2015\Algorithm;
use Bluewing\Algorithms2015\AlgorithmStruct;

abstract class LongTerm extends AlgorithmStruct implements Algorithm
{
    public $info = 'LT-15';
    public $minMeetings = 1;
    public $maxMeetings = 18;
    public $flattenMeeting = 14;
    public $interceptMean = 20.697572;
    public $linearMean = 2.209922;
    public $quadraticMean = -0.201674;
    public $cubicMean = 0.006537;
    public $intake = 0.919870;
    public $linearByIntake = -0.130337;
    public $quadraticByIntake = 0.013179;
    public $cubicByIntake = -0.000465;
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