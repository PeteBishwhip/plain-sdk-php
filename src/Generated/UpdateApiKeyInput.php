<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateApiKeyInput implements UpdateApiKeyInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $apiKeyId,
        /** @var iterable<int, string> */
        private readonly iterable $permissions,
        /** @var string|null */
        private readonly string|null $description = null,
    ) {
    }

    public function getApiKeyId(): string
    {
        return $this->apiKeyId;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function getPermissions(): iterable
    {
        return $this->permissions;
    }
}
