<?php

require_once __DIR__ . '/PlayerDecorator.php';

class ShieldDecorator extends PlayerDecorator
{
    private bool $usedShield = false;

    public function move(int $steps): void
    {
        if (! $this->usedShield) {
            echo "🛡️ Shield active! {$this->getName()} is protected from one snake attack.\n";
            $this->usedShield = true;
        }

        $this->player->moveBy($steps);
    }
}
