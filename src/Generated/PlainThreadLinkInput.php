<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class PlainThreadLinkInput implements PlainThreadLinkInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $plainThreadId,
    ) {
    }

    public function getPlainThreadId(): string
    {
        return $this->plainThreadId;
    }
}
