<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateEmailPreviewUrlInput implements CreateEmailPreviewUrlInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $emailId,
        /** @var string */
        private readonly string $customerId,
    ) {
    }

    public function getEmailId(): string
    {
        return $this->emailId;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }
}
