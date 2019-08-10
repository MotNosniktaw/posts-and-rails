<?php


class Fence
{
    private $posts;
    private $postWidth;
    private $rails;
    private $railLength;
    private $fence;

    public function buildFence(int $post, int $rail, float $width = 0.1, float $length = 1.5) {
        if ($post > 0 && $rail > 0) {
            if ($rail >= $post && $post >= 1 && $rail >= 1) {
                $this->fence = ($post - 1) * $length + $width;
            } else if (($rail) <= $post && $post >= 2 && $rail >= 1) {
                $this->fence = $rail * $length + $width;
            }
            return 'The materials you have provided will build a fence that is ' . $this->fence . 'm long.';
        } else {
            return 'To use the Fence Length Calculator function, please enter number values greater than 0.';
        }
    }

    public function calcMaterials(float $fenceLength, float $width = 0.1, float $length = 1.5) {
        if ($fenceLength > 0) {
            $this->rails = ceil(($fenceLength - $width) / $length);
            $this->posts = $this->rails + 1;
            return 'To build this fence you will need ' . $this->posts . ' posts and ' . $this->rails . ' rails.';
        } else {
            return 'To use the Materials Calculator function, please enter a number value greater than 0.';
        }

    }
}