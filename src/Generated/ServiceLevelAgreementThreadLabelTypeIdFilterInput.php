<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ServiceLevelAgreementThreadLabelTypeIdFilterInput implements ServiceLevelAgreementThreadLabelTypeIdFilterInputInterface
{
    public function __construct(
        /** @var iterable<int, string> */
        private readonly iterable $labelTypeIds,
        /** @var bool */
        private readonly bool $requireAll,
    ) {
    }

    public function getLabelTypeIds(): iterable
    {
        return $this->labelTypeIds;
    }

    public function getRequireAll(): bool
    {
        return $this->requireAll;
    }
}
