<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateSnippetInput implements CreateSnippetInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $name,
        /** @var string */
        private readonly string $text,
        /** @var string|null */
        private readonly string|null $markdown = null,
        /** @var string|null */
        private readonly string|null $path = null,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getMarkdown(): string|null
    {
        return $this->markdown;
    }

    public function getPath(): string|null
    {
        return $this->path;
    }
}
