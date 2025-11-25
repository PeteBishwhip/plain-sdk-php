<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateEscalationPathInput implements UpdateEscalationPathInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $escalationPathId,
        /** @var string|null */
        private readonly string|null $name = null,
        /** @var string|null */
        private readonly string|null $description = null,
        /** @var iterable<int, \Plain\Generated\EscalationPathStepInput>|null */
        private readonly iterable|null $steps = null,
    ) {
    }

    public function getEscalationPathId(): string
    {
        return $this->escalationPathId;
    }

    public function getName(): string|null
    {
        return $this->name;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function getSteps(): iterable|null
    {
        return $this->steps;
    }
}
