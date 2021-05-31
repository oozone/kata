<?php

declare(strict_types=1);

namespace App\Models;

use App\Builder\AbstractBuilder;

class AgedBrie extends AbstractBuilder
{
    public const NAME = 'Aged Brie';

    protected int $qualityStep = -1;
}
