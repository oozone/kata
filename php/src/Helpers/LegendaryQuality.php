<?php

declare(strict_types=1);

namespace App\Helpers;

class LegendaryQuality extends Quality
{

    /**
     * @var int
     */
    public int $quality = self::QUALITY;

    /**
     * CONST
     */
    public const QUALITY = 80;

}
