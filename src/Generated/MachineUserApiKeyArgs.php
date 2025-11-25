<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MachineUserApiKeyArgs implements MachineUserApiKeyArgsInterface
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
