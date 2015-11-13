<?php

class Rail
{
    protected $length = 1.5;

    public function __construct($length)
    {
        $this->setRailLength($length);
    }

    public function setRailLength($userLength)
    {
        return $this->length = $userLength;
    }

    public function getRailLength()
    {
        return $this->length;
    }
}