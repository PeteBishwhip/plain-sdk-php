<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ReorderAutorespondersInput implements ReorderAutorespondersInputInterface
{
    public function __construct(
        /** @var iterable<int, \Plain\Generated\AutoresponderOrderInput> */
        private readonly iterable $autorespondersOrder,
    ) {
    }

    public function getAutorespondersOrder(): iterable
    {
        return $this->autorespondersOrder;
    }
}
