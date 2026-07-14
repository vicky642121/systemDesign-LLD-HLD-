<?php
require_once __DIR__ . '/GradingStrategyInterface.php';

class StrictGrading implements GradingStrategyInterface
{

    public function getGrad(int $mark):string
    {
          return match(true) {
              $mark >= 80 => 'A',
              $mark >= 60 => 'C',
              $mark >= 40 => 'F',
              default => 'E',
          };
        
    }
    public function getMark(int $mark): void
    {
        echo "Marks: $mark → Grade:". $this->getGrad($mark)."\n";
    }
}