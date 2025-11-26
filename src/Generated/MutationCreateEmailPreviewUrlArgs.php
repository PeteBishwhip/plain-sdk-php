<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class MutationCreateEmailPreviewUrlArgs implements MutationCreateEmailPreviewUrlArgsInterface
{
    public function __construct(
        /** @var \Plain\Generated\CreateEmailPreviewUrlInput */
        private readonly CreateEmailPreviewUrlInput $input,
    ) {
    }

    public function getInput(): CreateEmailPreviewUrlInput
    {
        return $this->input;
    }
}
