<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateWorkflowRuleInput implements CreateWorkflowRuleInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $name,
        /** @var string */
        private readonly string $payload,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPayload(): string
    {
        return $this->payload;
    }
}
