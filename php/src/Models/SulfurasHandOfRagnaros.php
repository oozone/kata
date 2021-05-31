<?php

declare(strict_types=1);

namespace App\Models;

use App\Builder\AbstractBuilder;
use App\Helpers\LegendaryQuality;
use App\Helpers\Quality;
use App\Helpers\SellIn;
use GildedRose\Item;

class SulfurasHandOfRagnaros extends AbstractBuilder
{
    public const NAME = 'Sulfuras, Hand of Ragnaros';

    public function __construct(Item $item, SellIn $sellIn, Quality $quality = null)
    {
        parent::__construct($item, $sellIn, new LegendaryQuality((int)$quality));
    }

    public function dayPasses(): void
    {
    }
}
