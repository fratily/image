<?php

namespace Fratily\ImageGenerator\Attributes;

use Fratily\ImageGenerator\Attributes\Unit;

/**
 * 座標やサイズなどの値を表す。
 */
readonly class Dimension
{
    public function __construct(
        public int $value,
        public Unit $unit,
    ) {
    }
}
