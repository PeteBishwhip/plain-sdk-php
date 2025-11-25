<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class LinearIssueThreadLinkInput implements LinearIssueThreadLinkInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $linearIssueId,
        /** @var string */
        private readonly string $linearIssueUrl,
    ) {
    }

    public function getLinearIssueId(): string
    {
        return $this->linearIssueId;
    }

    public function getLinearIssueUrl(): string
    {
        return $this->linearIssueUrl;
    }
}
