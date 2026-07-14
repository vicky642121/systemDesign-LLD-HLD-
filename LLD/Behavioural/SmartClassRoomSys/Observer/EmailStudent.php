<?php

class EmailStudent implements StudentInterface
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function updateAssingment(string $assgn)
    {
        echo "Email to  {$this->name}: New assignment → ".$assgn."\n";
    }
}