<?php

declare(strict_types=1);

namespace App\Models;

use App\Builder\AbstractBuilder;

class BackstagePasses extends AbstractBuilder
{
    public const NAME = 'Backstage passes to a TAFKAL80ETC concert';

    public function dayPasses(): void
    {
        $this->sellIn->decrease();
        if ($this->sellIn->hasPassed()) {
            $this->quality->reset();
        } elseif ($this->sellIn->toInt() <= 5) {
            $this->quality->increase(3);
        } elseif ($this->sellIn->toInt() <= 10) {
            $this->quality->increase(2);
        } else {
            $this->quality->increase(1);
        }
        $this->updateItem();
    }
}
