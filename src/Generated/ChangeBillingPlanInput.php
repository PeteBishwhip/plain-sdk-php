<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ChangeBillingPlanInput implements ChangeBillingPlanInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\BillingPlanKey */
        private readonly BillingPlanKey $planKey,
        /** @var \Plain\Generated\BillingIntervalUnit|null */
        private readonly BillingIntervalUnit|null $intervalUnit = null,
    ) {
    }

    public function getPlanKey(): BillingPlanKey
    {
        return $this->planKey;
    }

    public function getIntervalUnit(): BillingIntervalUnit|null
    {
        return $this->intervalUnit;
    }
}
