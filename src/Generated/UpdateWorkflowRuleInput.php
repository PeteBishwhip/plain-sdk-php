<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateWorkflowRuleInput implements UpdateWorkflowRuleInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $workflowRuleId,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $name = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $payload = null,
        /** @var \Plain\Generated\IntInput|null */
        private readonly IntInput|null $order = null,
    ) {
    }

    public function getWorkflowRuleId(): string
    {
        return $this->workflowRuleId;
    }

    public function getName(): StringInput|null
    {
        return $this->name;
    }

    public function getPayload(): StringInput|null
    {
        return $this->payload;
    }

    public function getOrder(): IntInput|null
    {
        return $this->order;
    }
}
