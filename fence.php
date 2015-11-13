<?php

include 'post.php';
include 'rail.php';

class Fence
{

    protected $railNumber;
    protected $postNumber;
    protected $fenceLength;

    public function __construct($postNumber, $railNumber, $fenceLength)
    {
        $this->setNumberOfPosts($postNumber);
        $this->setNumberOfRails($railNumber);
        $this->setFenceLength($fenceLength);
    }

    public function setNumberOfRails($railNumber)
    {
        return $this->railNumber = $railNumber;
    }

    public function getNumberOfRails()
    {
        return $this->railNumber;
    }

    public function setNumberOfPosts($postNumber)
    {
        return $this->postNumber = $postNumber;
    }

    public function getNumberOfPosts()
    {
        return $this->postNumber;
    }

    /**
     * @return mixed
     */
    public function getFenceLength()
    {
        return $this->fenceLength;
    }

    /**
     * @param mixed $fenceLength
     */
    public function setFenceLength($fenceLength)
    {
        $this->fenceLength = $fenceLength;
    }

    public function setPostAndRails($userRailNumber)
    {
        if ($userRailNumber > $this->userPostNumber) {
            return $this->railNumber = $this->userPostNumber - 1;
            return $this->railNumber = $userRailNumber;
        }

        if ($userPostNumber > $this->userRailNumber) {
            return $this->postNumber = $this->userRailNumber++;
            return $this->postNumber = $userPostNumber;
        }

    }

}



