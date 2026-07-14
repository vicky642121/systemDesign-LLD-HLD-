<?php

require_once __DIR__ . '/GradingStrategyInterface.php';

class GradeCalculator
{
    private GradingStrategyInterface $grading;

    public function setStrategy(GradingStrategyInterface $grading)
    {
        $this->grading = $grading;
    }

    public function calculate(int $mark)
    {
        $this->grading->getMark($mark);
    }
}