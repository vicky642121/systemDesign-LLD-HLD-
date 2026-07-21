<?php

interface BoardElement
{
    public function getStart():int;
    public function getEnd():int;
    public function apply(int $position):int;
}