<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class QuerySearchSlackUsersArgs implements QuerySearchSlackUsersArgsInterface
{
    public function __construct(
        /** @var string */
        private readonly string $slackTeamId,
        /** @var string */
        private readonly string $slackChannelId,
        /** @var string */
        private readonly string $searchQuery,
        /** @var int|null */
        private readonly int|null $first = null,
        /** @var string|null */
        private readonly string|null $after = null,
        /** @var int|null */
        private readonly int|null $last = null,
        /** @var string|null */
        private readonly string|null $before = null,
    ) {
    }

    public function getSlackTeamId(): string
    {
        return $this->slackTeamId;
    }

    public function getSlackChannelId(): string
    {
        return $this->slackChannelId;
    }

    public function getSearchQuery(): string
    {
        return $this->searchQuery;
    }

    public function getFirst(): int|null
    {
        return $this->first;
    }

    public function getAfter(): string|null
    {
        return $this->after;
    }

    public function getLast(): int|null
    {
        return $this->last;
    }

    public function getBefore(): string|null
    {
        return $this->before;
    }
}
