<?php

class Post
{
    protected $width = 0.1;

    public function __construct($width)
    {
        $this->setPostWidth($width);
    }


    public function setPostWidth($userWidth)
    {
        return $this->width = $userWidth;
    }

    public function getPostWidth()
    {
        return $this->width;
    }
}
