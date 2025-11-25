<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpsertCustomerInput implements UpsertCustomerInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\UpsertCustomerIdentifierInput */
        private readonly UpsertCustomerIdentifierInput $identifier,
        /** @var \Plain\Generated\UpsertCustomerOnCreateInput */
        private readonly UpsertCustomerOnCreateInput $onCreate,
        /** @var \Plain\Generated\UpsertCustomerOnUpdateInput */
        private readonly UpsertCustomerOnUpdateInput $onUpdate,
    ) {
    }

    public function getIdentifier(): UpsertCustomerIdentifierInput
    {
        return $this->identifier;
    }

    public function getOnCreate(): UpsertCustomerOnCreateInput
    {
        return $this->onCreate;
    }

    public function getOnUpdate(): UpsertCustomerOnUpdateInput
    {
        return $this->onUpdate;
    }
}
