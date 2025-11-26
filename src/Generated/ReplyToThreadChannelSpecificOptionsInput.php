<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ReplyToThreadChannelSpecificOptionsInput implements ReplyToThreadChannelSpecificOptionsInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\ReplyToThreadEmailChannelSpecificOptionsInput */
        private readonly ReplyToThreadEmailChannelSpecificOptionsInput $email,
    ) {
    }

    public function getEmail(): ReplyToThreadEmailChannelSpecificOptionsInput
    {
        return $this->email;
    }
}
