<?php

class SnakeFactory implements BoardElement
{
    private int $head;
    private int $tail;

    public function __construct(int $head, int $tail)
    {
        $this->head = $head;
        $this->tail = $tail;
    }

    public function getStart():int
    {
        return $this->head;
    }

    public function getEnd():int
    {
        return $this->tail;
    }

    public function apply(int $position): int
    {
        echo "🐍 Oops! Snake bites! {$this->head} → {$this->tail}\n";
        return $this->tail;
    }
}
