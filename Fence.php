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
            return 'The materials you have provided will build a fence that is ' . $this->fence . 'm long.';
    }

    public function calcMaterials(float $fenceLength, float $width = 0.1, float $length = 1.5) {
        $this->rails = ceil(($fenceLength - $width) / $length) + 1;
        $this->posts = $this->rails + 1;

        return ' To build this fence you will need ' . $this->posts . ' posts and ' . $this->rails . ' rails.';
    }
}