<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CustomerSearchCondition implements CustomerSearchConditionInterface
{
    public function __construct(
        /** @var \Plain\Generated\StringSearchExpression|null */
        private readonly StringSearchExpression|null $fullName = null,
        /** @var \Plain\Generated\StringSearchExpression|null */
        private readonly StringSearchExpression|null $shortName = null,
        /** @var \Plain\Generated\StringSearchExpression|null */
        private readonly StringSearchExpression|null $email = null,
        /** @var \Plain\Generated\StringSearchExpression|null */
        private readonly StringSearchExpression|null $externalId = null,
        /** @var \Plain\Generated\StringSearchExpression|null */
        private readonly StringSearchExpression|null $timelineEntryText = null,
    ) {
    }

    public function getFullName(): StringSearchExpression|null
    {
        return $this->fullName;
    }

    public function getShortName(): StringSearchExpression|null
    {
        return $this->shortName;
    }

    public function getEmail(): StringSearchExpression|null
    {
        return $this->email;
    }

    public function getExternalId(): StringSearchExpression|null
    {
        return $this->externalId;
    }

    public function getTimelineEntryText(): StringSearchExpression|null
    {
        return $this->timelineEntryText;
    }
}
