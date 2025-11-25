<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QueryCustomerSurveyArgs implements QueryCustomerSurveyArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $id,
    ) {
    }

    public function getId(): string
    {
        return $this->id;
    }
}
