<?php

include_once 'post.php';
include_once 'rail.php';

class Fence
{

    protected $railLength;
    protected $railNumber;
    protected $postLength;
    protected $postNumber;

    public function __construct()
    {
    }

    public function setNumberOfRails($userRailNumber)
    {
        if ($userRailNumber > $this->userPostNumber) {
            return $this->railNumber = $this->userPostNumber - 1;
        }
        return $this->railNumber = $userRailNumber;
    }

    public function getNumberOfRails()
    {
        return $this->railNumber;
    }

    public function setNumberOfPosts($userPostNumber)
    {
        if ($userPostNumber > $this->userRailNumber) {
            return $this->postNumber = $this->userRailNumber++;
        }
        return $this->postNumber = $userPostNumber;
    }

    public function getNumberOfPosts()
    {
        return $this->postNumber;
    }

}

$testRailFuncs = new Fence();

$testRailFuncs->setNumberOfRails(10);
$testRailFuncs->setNumberOfPosts(0);

var_dump($testRailFuncs->getNumberOfRails());
var_dump($testRailFuncs->getNumberOfPosts());


