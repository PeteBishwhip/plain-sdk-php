<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CsatCustomerSurveyTemplateInput implements CsatCustomerSurveyTemplateInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $type,
        /** @var string */
        private readonly string $questionText,
    ) {
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getQuestionText(): string
    {
        return $this->questionText;
    }
}
