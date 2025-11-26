<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class DeleteHelpCenterInput implements DeleteHelpCenterInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $helpCenterId,
    ) {
    }

    public function getHelpCenterId(): string
    {
        return $this->helpCenterId;
    }
}
