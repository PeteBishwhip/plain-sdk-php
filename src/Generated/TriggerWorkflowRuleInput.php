<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class TriggerWorkflowRuleInput implements TriggerWorkflowRuleInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $workflowRuleId,
        /** @var string */
        private readonly string $threadId,
    ) {
    }

    public function getWorkflowRuleId(): string
    {
        return $this->workflowRuleId;
    }

    public function getThreadId(): string
    {
        return $this->threadId;
    }
}
