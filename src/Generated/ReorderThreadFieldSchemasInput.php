<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ReorderThreadFieldSchemasInput implements ReorderThreadFieldSchemasInputInterface
{
    public function __construct(
        /** @var iterable<int, \Plain\Generated\ThreadFieldSchemaOrderInput> */
        private readonly iterable $threadFieldSchemaOrders,
    ) {
    }

    public function getThreadFieldSchemaOrders(): iterable
    {
        return $this->threadFieldSchemaOrders;
    }
}
