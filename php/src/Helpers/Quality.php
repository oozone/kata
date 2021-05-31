<?php

namespace App\Helpers;

class Quality
{

    public int $quality;

    public function __construct(int $quality)
    {
        $this->setQuality($quality);
    }

    /**
     * @param int $quality
     */
    private function setQuality(int $quality): void
    {
        if($quality < 1) {
            $quality = 0;
        }
        if($quality > 50) {
            $quality = 50;
        }
        $this->quality = $quality;
    }

    /**
     * @param int $increment
     */
    public function increase(int $increment): void
    {
        $this->setQuality($this->quality + $increment);
    }

    /**
     * @param int $decrement
     */
    public function decrease(int $decrement): void
    {
        $this->setQuality($this->quality - $decrement);
    }

    /**
     *
     */
    public function reset(): void
    {
        $this->setQuality(0);
    }

    /**
     * @return int
     */
    public function toInt(): int
    {
        return (int) $this->quality;
    }


}
