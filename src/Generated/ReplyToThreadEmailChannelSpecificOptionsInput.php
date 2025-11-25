<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ReplyToThreadEmailChannelSpecificOptionsInput implements ReplyToThreadEmailChannelSpecificOptionsInputInterface
{
    public function __construct(
        /** @var iterable<int, \Plain\Generated\EmailParticipantInput>|null */
        private readonly iterable|null $additionalRecipients = null,
        /** @var iterable<int, \Plain\Generated\EmailParticipantInput>|null */
        private readonly iterable|null $hiddenRecipients = null,
    ) {
    }

    public function getAdditionalRecipients(): iterable|null
    {
        return $this->additionalRecipients;
    }

    public function getHiddenRecipients(): iterable|null
    {
        return $this->hiddenRecipients;
    }
}
