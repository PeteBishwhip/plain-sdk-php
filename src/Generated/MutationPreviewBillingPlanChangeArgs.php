<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationPreviewBillingPlanChangeArgs implements MutationPreviewBillingPlanChangeArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\PreviewBillingPlanChangeInput */
        private readonly PreviewBillingPlanChangeInput $input,
    ) {
    }

    public function getInput(): PreviewBillingPlanChangeInput
    {
        return $this->input;
    }
}
