<?php


class Fence
{
    private $posts;
    private $postWidth;
    private $rails;
    private $railLength;
    private $fence;

    public function buildFence(int $post, int $rail, float $width = 0.1, float $length = 1.5) {
        if (($rail + 1) >= $post && $post >= 2 && $rail >= 1) {
            $this->fence = $post * $length + $width;
        } else if (($rail) <= $post && $post >= 2 && $rail >= 1) {
            $this->fence = $rail * $length + $width;
        }
            return $this->fence;
    }

    public function calcMaterials($fenceLength) {

    }
}