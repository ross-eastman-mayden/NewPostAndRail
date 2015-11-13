<?php
include 'fence.php';

class FenceCalculator
{

    protected $postNumber;
    protected $railNumber;
    protected $fenceLength;
    protected $post;
    protected $rail;
    protected $fence;

    public function __construct($postNumber, $railNumber, $fenceLength, $railLength = 1.5, $postWidth = 0.1)
    {
        $this->post = new Post($postWidth);
        $this->rail = new Rail($railLength);
        $this->fence = new Fence($postNumber, $railNumber, $fenceLength);

    }

    public function calculateFenceLengthForGivenPostAndRailNumbers()
    {
        $this->fence->fenceLength = ($this->fence->postNumber * $$this->post->postWidth) + ($this->fence->railNumber * $this->rail->railLength);

        return $this->fence->fenceLength;
    }

    public function calculateRailsAndPostsForGivenFenceLength()
    {
        $this->fence->postNumber = ($this->fence->fenceLength - $this->post->postWidth) / ($this->post->postWidth + $this->rail->railLength);
        $this->fence->railNumber = $this->fence->postNumber += 1;

        return $this->fence->getNumberOfPosts();
        return $this->fence->getNumberOfRails();
    }
}


