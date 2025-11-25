<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteApiKeyInput implements DeleteApiKeyInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $apiKeyId,
    ) {
    }

    public function getApiKeyId(): string
    {
        return $this->apiKeyId;
    }
}
