<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryCustomRoleArgs implements QueryCustomRoleArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customRoleId,
    ) {
    }

    public function getCustomRoleId(): string
    {
        return $this->customRoleId;
    }
}
