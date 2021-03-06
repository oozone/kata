<?php

declare(strict_types=1);

namespace App\Builder;

use App\Helpers\Quality;
use App\Helpers\SellIn;
use GildedRose\Item;

abstract class AbstractBuilder
{
    protected SellIn $sellIn;
    protected Quality $quality;
    protected Item $item;
    protected int $qualityStep = 1;

    public function __construct(Item $item, SellIn $sellIn, Quality $quality)
    {
        $this->item = $item;
        $this->sellIn = $sellIn;
        $this->quality = $quality;
        $this->updateItem();
    }

    public static function build(Item $item): self
    {
        return new static($item, new SellIn($item->sell_in), new Quality($item->quality));
    }

    protected function updateItem(): void
    {
        $this->item->sell_in = $this->sellIn->toInt();
        $this->item->quality = $this->quality->toInt();
    }

    public function dayPasses(): void
    {
        $this->sellIn->decrease();
        if ($this->sellIn->hasPassed()) {
            $this->qualityStep *= 2;
        }
        $this->quality->decrease($this->qualityStep);

        $this->updateItem();
    }
}
