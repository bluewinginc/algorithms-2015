<?php

namespace Bluewing\Algorithms2015;

abstract class AlgorithmStruct
{
    public $info = null;
    public $minMeetings = 0;
    public $maxMeetings = 0;
    public $flattenMeeting = 0;
    public $interceptMean = 0.0;
    public $linearMean = 0.0;
    public $quadraticMean = 0.0;
    public $cubicMean = 0.0;
    public $intake = 0.0;
    public $linearByIntake = 0.0;
    public $quadraticByIntake = 0.0;
    public $cubicByIntake = 0.0;
    public $reliableChangeIndex = 0.0;
    public $standardDeviation = 0.0;
    public $clinicalCutoff = 0.0;

    /**
     * @return array
     */
    protected function structToArray() : array
    {
        return [
            'info'=> $this->info,
            'minMeetings' => $this->minMeetings,
            'maxMeetings' => $this->maxMeetings,
            'flattenMeeting' => $this->flattenMeeting,
            'interceptMean' => $this->interceptMean,
            'linearMean' => $this->linearMean,
            'quadraticMean' => $this->quadraticMean,
            'cubicMean' => $this->cubicMean,
            'intake' => $this->intake,
            'linearByIntake' => $this->linearByIntake,
            'quadraticByIntake' => $this->quadraticByIntake,
            'cubicByIntake' => $this->cubicByIntake,
            'reliableChangeIndex' => $this->reliableChangeIndex,
            'standardDeviation' => $this->standardDeviation,
            'clinicalCutoff' => $this->clinicalCutoff,
        ];
    }
}