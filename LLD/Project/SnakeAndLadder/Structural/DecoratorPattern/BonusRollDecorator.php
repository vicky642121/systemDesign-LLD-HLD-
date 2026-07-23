<?php

require_once __DIR__ . '/PlayerDecorator.php';

class BonusRollDecorator extends PlayerDecorator
{
    public function move(int $steps): void
    {
        $this->player->moveBy($steps);
        echo "🎁 Bonus! {$this->getName()} gets an extra roll → moves 3 more!\n";
        $this->player->moveBy(3);
    }
}
