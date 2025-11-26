<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpsertRoleScopesInput implements UpsertRoleScopesInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $customRoleId,
        /** @var \Plain\Generated\RoleScopeResourceType */
        private readonly RoleScopeResourceType $resource,
        /** @var iterable<int, \Plain\Generated\ScopeConditionInput> */
        private readonly iterable $scopes,
    ) {
    }

    public function getCustomRoleId(): string
    {
        return $this->customRoleId;
    }

    public function getResource(): RoleScopeResourceType
    {
        return $this->resource;
    }

    public function getScopes(): iterable
    {
        return $this->scopes;
    }
}
