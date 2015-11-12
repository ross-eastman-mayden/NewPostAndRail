<?php

class Rail
{
    protected $length = 1.5;

    public function setRailLength($userLength)
    {
        return $this->length = $userLength;
    }

    public function getRailLength()
    {
        return $this->length;
    }
}

$test = new Rail;

var_dump($test->getRailLength());