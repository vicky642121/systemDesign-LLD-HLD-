<?php

class SMSStudent implements StudentInterface
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function updateAssingment(string $assgn)
    {
        echo "SMS to {$this->name}: New assignment → " . $assgn . "\n";
    }
}
