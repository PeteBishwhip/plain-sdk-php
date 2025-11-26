<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class EscalationPathStepInput implements EscalationPathStepInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\EscalationPathStepType */
        private readonly EscalationPathStepType $type,
        /** @var string|null */
        private readonly string|null $userId = null,
        /** @var string|null */
        private readonly string|null $labelTypeId = null,
    ) {
    }

    public function getType(): EscalationPathStepType
    {
        return $this->type;
    }

    public function getUserId(): string|null
    {
        return $this->userId;
    }

    public function getLabelTypeId(): string|null
    {
        return $this->labelTypeId;
    }
}
