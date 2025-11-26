<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ComponentSpacerInput implements ComponentSpacerInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\ComponentSpacerSize|null */
        private readonly ComponentSpacerSize|null $spacerSize = null,
        /** @var \Plain\Generated\ComponentSpacerSize|null */
        private readonly ComponentSpacerSize|null $size = null,
    ) {
    }

    public function getSpacerSize(): ComponentSpacerSize|null
    {
        return $this->spacerSize;
    }

    public function getSize(): ComponentSpacerSize|null
    {
        return $this->size;
    }
}
