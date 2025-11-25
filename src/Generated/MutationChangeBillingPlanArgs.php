<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationChangeBillingPlanArgs implements MutationChangeBillingPlanArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\ChangeBillingPlanInput */
        private readonly ChangeBillingPlanInput $input,
    ) {
    }

    public function getInput(): ChangeBillingPlanInput
    {
        return $this->input;
    }
}
