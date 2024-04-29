<?php

namespace Fratily\ImageGenerator\Attributes;

readonly class Position
{
    public function __construct(
        public Dimension $x = new Dimension(0, Unit::Px),
        public Dimension $y = new Dimension(0, Unit::Px),
        public string|null $relative = null,
        public Origin|null $origin = null,
    ) {
    }
}
