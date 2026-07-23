<?php

interface Observer
{
    public function update(string $event, mixed $target): void;
}
