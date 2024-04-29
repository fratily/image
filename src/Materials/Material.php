<?php

namespace Fratily\ImageGenerator\Materials;

use Fratily\ImageGenerator\Attributes\Origin;
use Fratily\ImageGenerator\Attributes\Position;
use Fratily\ImageGenerator\Attributes\Size;

abstract readonly class Material
{
    public function __construct(
        /** Size of the material. Default is auto (fit the inside content).*/
        public Size $size = new Size(),
        /** Position of the material. Default is top-left of the canvas. */
        public Position $position = new Position(),
        /** Origin of the material. Default is top-left of the self. */
        public Origin $origin = new Origin()
    ) {
    }
}
