<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpdateWorkflowRuleArgs implements MutationUpdateWorkflowRuleArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpdateWorkflowRuleInput */
        private readonly UpdateWorkflowRuleInput $input,
    ) {
    }

    public function getInput(): UpdateWorkflowRuleInput
    {
        return $this->input;
    }
}
