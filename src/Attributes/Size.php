<?php

namespace Fratily\ImageGenerator\Attributes;

readonly class Size
{
    public function __construct(
        public Dimension|null $x = null,
        public Dimension|null $y = null,
    ) {
    }
}
