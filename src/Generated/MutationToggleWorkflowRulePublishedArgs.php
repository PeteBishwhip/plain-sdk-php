<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationToggleWorkflowRulePublishedArgs implements MutationToggleWorkflowRulePublishedArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\ToggleWorkflowRulePublishedInput */
        private readonly ToggleWorkflowRulePublishedInput $input,
    ) {
    }

    public function getInput(): ToggleWorkflowRulePublishedInput
    {
        return $this->input;
    }
}
