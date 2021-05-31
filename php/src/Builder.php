<?php

namespace GildedRose;

use App\Builder\AbstractBuilder;
use App\Models\AgedBrie;
use App\Models\BackstagePasses;
use App\Models\ConjuredManaCake;
use App\Models\DexterityVest;
use App\Models\ElixirOfTheMongoose;
use App\Models\SulfurasHandOfRagnaros;

class Builder
{
    public function build(Item $item): AbstractBuilder
    {
        switch ($item->name) {
            case ConjuredManaCake::NAME:
                return ConjuredManaCake::build($item);
            case BackstagePasses::NAME:
                return BackstagePasses::build($item);
            case ElixirOfTheMongoose::NAME:
                return ElixirOfTheMongoose::build($item);
            case AgedBrie::NAME:
                return AgedBrie::build($item);
            case DexterityVest::NAME:
                return DexterityVest::build($item);
            case SulfurasHandOfRagnaros::NAME:
                return SulfurasHandOfRagnaros::build($item);
            default:
                throw new \Exception('Not found');
        }
    }
}
