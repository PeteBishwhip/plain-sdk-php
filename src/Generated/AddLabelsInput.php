<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class AddLabelsInput implements AddLabelsInputInterface
{
    public function __construct(
        /** @var iterable<int, string> */
        private readonly iterable $labelTypeIds,
        /** @var string */
        private readonly string $threadId,
    ) {
    }

    public function getLabelTypeIds(): iterable
    {
        return $this->labelTypeIds;
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }
}
