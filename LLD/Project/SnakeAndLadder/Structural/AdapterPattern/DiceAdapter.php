<?php

require_once __DIR__ .'/DiceInterface.php';
require_once __DIR__ .'/OldRandomSystem.php';

class DiceAdapter implements DiceInterface
{
    private OldRandomSystem $old;

    public function __construct()
    {
        $this->old = new OldRandomSystem();
    }

    public function roll(): int
    {
        return $this->old->generateNumber(1, 6);
    }
}
