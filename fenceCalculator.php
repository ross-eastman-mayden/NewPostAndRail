<?php
include 'fence.php';

class FenceCalculator extends Fence
{

    protected $postNumber;
    protected $railNumber;
    protected $fenceLength;

    public function __construct($postNumber, $railNumber, $fenceLength)
    {
    }

    public function calculateFenceLengthForGivenPostAndRailNumbers($postNumber, $postWidth, $railNumber, $railLength)
    {
        $this->fenceLength = ($postNumber * $postWidth) + ($railNumber * $railLength);
    }

    public function calculateRailsAndPostsForGivenFenceLength($fenceLength, $postWidth, $railLength)
    {
        $this->postNumber = ($fenceLength - $postWidth) / ($postWidth + $railLength);
        $this->railNumber = $this->postNumber += 1;
    }
}