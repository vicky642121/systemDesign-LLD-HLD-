<?php

interface MovementStrategy
{
    public function move(int $position, int $dice): int;
}
