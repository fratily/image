<?php

namespace Fratily\ImageGenerator\Attributes;

readonly class Origin
{
    public function __construct(
        /** @phpstan-var 'left'|'center'|'right'|Dimension */
        public string|Dimension $x = 'left',
        /** @phpstan-var 'top'|'middle'|'bottom'|Dimension */
        public string|Dimension $y = 'top',
    ) {
    }
}
