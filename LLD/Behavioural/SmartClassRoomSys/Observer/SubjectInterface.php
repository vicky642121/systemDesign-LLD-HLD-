<?php

interface SubjectInterface
{
    public function attach(StudentInterface $studentInterface):void;
    public function detach(StudentInterface $studentInterface):void;
    public function notify():void;
}