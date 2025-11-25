<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class StringSearchExpression implements StringSearchExpressionInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $caseInsensitiveContains = null,
    ) {
    }

    public function getCaseInsensitiveContains(): string|null
    {
        return $this->caseInsensitiveContains;
    }
}
