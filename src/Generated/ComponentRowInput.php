<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ComponentRowInput implements ComponentRowInputInterface
{
    public function __construct(
        /** @var iterable<int, \Plain\Generated\ComponentRowContentInput> */
        private readonly iterable $rowMainContent,
        /** @var iterable<int, \Plain\Generated\ComponentRowContentInput> */
        private readonly iterable $rowAsideContent,
    ) {
    }

    public function getRowMainContent(): iterable
    {
        return $this->rowMainContent;
    }

    public function getRowAsideContent(): iterable
    {
        return $this->rowAsideContent;
    }
}
