<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationUpsertMyEmailSignatureArgs implements MutationUpsertMyEmailSignatureArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpsertMyEmailSignatureInput */
        private readonly UpsertMyEmailSignatureInput $input,
    ) {
    }

    public function getInput(): UpsertMyEmailSignatureInput
    {
        return $this->input;
    }
}
