<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationDeleteWorkflowRuleArgs implements MutationDeleteWorkflowRuleArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\DeleteWorkflowRuleInput */
        private readonly DeleteWorkflowRuleInput $input,
    ) {
    }

    public function getInput(): DeleteWorkflowRuleInput
    {
        return $this->input;
    }
}
