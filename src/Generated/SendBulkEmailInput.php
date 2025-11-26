<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class SendBulkEmailInput implements SendBulkEmailInputInterface
{
    public function __construct(
        /** @var iterable<int, string> */
        private readonly iterable $threadIds,
        /** @var string */
        private readonly string $textContent,
        /** @var string|null */
        private readonly string|null $markdownContent = null,
    ) {
    }

    public function getThreadIds(): iterable
    {
        return $this->threadIds;
    }

    public function getTextContent(): string
    {
        return $this->textContent;
    }

    public function getMarkdownContent(): string|null
    {
        return $this->markdownContent;
    }
}
