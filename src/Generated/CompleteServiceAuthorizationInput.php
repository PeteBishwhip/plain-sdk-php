<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CompleteServiceAuthorizationInput implements CompleteServiceAuthorizationInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $serviceAuthorizationId,
        /** @var string|null */
        private readonly string|null $payload = null,
        /** @var \Plain\Generated\CompleteJiraAuthorizationInput|null */
        private readonly CompleteJiraAuthorizationInput|null $jira = null,
    ) {
    }

    public function getServiceAuthorizationId(): string
    {
        return $this->serviceAuthorizationId;
    }

    public function getPayload(): string|null
    {
        return $this->payload;
    }

    public function getJira(): CompleteJiraAuthorizationInput|null
    {
        return $this->jira;
    }
}
