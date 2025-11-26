<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryWorkflowRuleArgs implements QueryWorkflowRuleArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $workflowRuleId,
    ) {
    }

    public function getWorkflowRuleId(): string
    {
        return $this->workflowRuleId;
    }
}
