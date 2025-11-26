<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class GenerateHelpCenterArticleInput implements GenerateHelpCenterArticleInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $threadId,
        /** @var string */
        private readonly string $helpCenterId,
    ) {
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }

    public function getHelpCenterId(): string
    {
        return $this->helpCenterId;
    }
}
