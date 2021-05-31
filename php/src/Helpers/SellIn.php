<?php

namespace App\Helpers;

class SellIn
{
    private int $days;

    public function __construct(int $days)
    {
        $this->days = $days;
    }

    public function decrease(): void
    {
        $this->days--;
    }

    public function hasPassed(): bool
    {
        return 1 > $this->days;
    }

    public function toInt(): int
    {
        return $this->days;
    }


}
