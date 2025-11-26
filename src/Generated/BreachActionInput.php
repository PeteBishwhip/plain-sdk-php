<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class BreachActionInput implements BreachActionInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\BeforeBreachActionInput|null */
        private readonly BeforeBreachActionInput|null $beforeBreachAction = null,
    ) {
    }

    public function getBeforeBreachAction(): BeforeBreachActionInput|null
    {
        return $this->beforeBreachAction;
    }
}
