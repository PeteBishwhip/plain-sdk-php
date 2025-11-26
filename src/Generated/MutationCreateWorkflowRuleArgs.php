<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateWorkflowRuleArgs implements MutationCreateWorkflowRuleArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateWorkflowRuleInput */
        private readonly CreateWorkflowRuleInput $input,
    ) {
    }

    public function getInput(): CreateWorkflowRuleInput
    {
        return $this->input;
    }
}
