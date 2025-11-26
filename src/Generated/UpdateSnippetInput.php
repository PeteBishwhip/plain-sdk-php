<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateSnippetInput implements UpdateSnippetInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $snippetId,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $name = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $text = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $markdown = null,
        /** @var \Plain\Generated\OptionalStringInput|null */
        private readonly OptionalStringInput|null $path = null,
    ) {
    }

    public function getSnippetId(): string
    {
        return $this->snippetId;
    }

    public function getName(): StringInput|null
    {
        return $this->name;
    }

    public function getText(): StringInput|null
    {
        return $this->text;
    }

    public function getMarkdown(): StringInput|null
    {
        return $this->markdown;
    }

    public function getPath(): OptionalStringInput|null
    {
        return $this->path;
    }
}
