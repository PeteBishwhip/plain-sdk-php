<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class RemoveLabelsInput implements RemoveLabelsInputInterface
{
    public function __construct(
        /** @var iterable<int, string> */
        private readonly iterable $labelIds,
    ) {
    }

    public function getLabelIds(): iterable
    {
        return $this->labelIds;
    }
}
