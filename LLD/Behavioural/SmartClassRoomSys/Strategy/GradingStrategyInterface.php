<?php

interface GradingStrategyInterface
{
    public function getMark(int $mark):void;
}