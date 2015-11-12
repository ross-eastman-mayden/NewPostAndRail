<?php

class Post
{
    protected $width = 0.1;

    public function setPostWidth($userWidth)
    {
        return $this->width = $userWidth;
    }

    public function getPostWidth()
    {
        return $this->width;
    }
}

$test = new Post;

var_dump($test->getPostWidth());