<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationTriggerWorkflowRuleArgs implements MutationTriggerWorkflowRuleArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\TriggerWorkflowRuleInput */
        private readonly TriggerWorkflowRuleInput $input,
    ) {
    }

    public function getInput(): TriggerWorkflowRuleInput
    {
        return $this->input;
    }
}
