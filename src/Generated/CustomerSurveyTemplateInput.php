<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CustomerSurveyTemplateInput implements CustomerSurveyTemplateInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\CsatCustomerSurveyTemplateInput|null */
        private readonly CsatCustomerSurveyTemplateInput|null $csatTemplate = null,
    ) {
    }

    public function getCsatTemplate(): CsatCustomerSurveyTemplateInput|null
    {
        return $this->csatTemplate;
    }
}
