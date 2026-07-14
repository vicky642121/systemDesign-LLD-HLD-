<?php
require_once __DIR__ . '/GradingStrategyInterface.php';

class LenientGrading implements GradingStrategyInterface
{
    public function getGrad(int $mark): string
    {
        return match (true) {
            $mark >= 80 => ' Pass ✅',
            $mark >= 60 => ' Pass ✅',
            $mark >= 40 => ' Pass ✅',
            default => 'Fail'
        };
    }
    public function getMark(int $mark): void
    {
        echo "Marks: $mark → Grade:" . $this->getGrad($mark)."\n";
    }
}
