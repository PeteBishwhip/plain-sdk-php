<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ComponentPlainTextInput implements ComponentPlainTextInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $plainText,
        /** @var \Plain\Generated\ComponentPlainTextSize|null */
        private readonly ComponentPlainTextSize|null $plainTextSize = null,
        /** @var \Plain\Generated\ComponentPlainTextColor|null */
        private readonly ComponentPlainTextColor|null $plainTextColor = null,
    ) {
    }

    public function getPlainText(): string
    {
        return $this->plainText;
    }

    public function getPlainTextSize(): ComponentPlainTextSize|null
    {
        return $this->plainTextSize;
    }

    public function getPlainTextColor(): ComponentPlainTextColor|null
    {
        return $this->plainTextColor;
    }
}
