<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateWorkspaceInput implements UpdateWorkspaceInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $publicName = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $name = null,
        /** @var \Plain\Generated\WorkspaceFileInput|null */
        private readonly WorkspaceFileInput|null $logo = null,
        /** @var iterable<int, string>|null */
        private readonly iterable|null $domainNames = null,
    ) {
    }

    public function getPublicName(): StringInput|null
    {
        return $this->publicName;
    }

    public function getName(): StringInput|null
    {
        return $this->name;
    }

    public function getLogo(): WorkspaceFileInput|null
    {
        return $this->logo;
    }

    public function getDomainNames(): iterable|null
    {
        return $this->domainNames;
    }
}
