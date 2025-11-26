<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ComponentContainerInput implements ComponentContainerInputInterface
{
    public function __construct(
        /** @var iterable<int, \Plain\Generated\ComponentContainerContentInput> */
        private readonly iterable $containerContent,
    ) {
    }

    public function getContainerContent(): iterable
    {
        return $this->containerContent;
    }
}
