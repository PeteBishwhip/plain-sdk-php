<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateCheckoutSessionInput implements CreateCheckoutSessionInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\BillingPlanKey */
        private readonly BillingPlanKey $plan,
        /** @var \Plain\Generated\BillingInterval|null */
        private readonly BillingInterval|null $interval = null,
        /** @var \Plain\Generated\BillingIntervalUnit|null */
        private readonly BillingIntervalUnit|null $intervalUnit = null,
    ) {
    }

    public function getPlan(): BillingPlanKey
    {
        return $this->plan;
    }

    public function getInterval(): BillingInterval|null
    {
        return $this->interval;
    }

    public function getIntervalUnit(): BillingIntervalUnit|null
    {
        return $this->intervalUnit;
    }
}
