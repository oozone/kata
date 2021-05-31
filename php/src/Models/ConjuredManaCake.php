<?php

namespace App\Models;

use App\Builder\AbstractBuilder;

class ConjuredManaCake extends AbstractBuilder
{
    public const NAME = 'Conjured Mana Cake';

    protected int $qualityStep = 2;
}
