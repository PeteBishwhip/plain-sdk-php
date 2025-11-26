<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ComponentTextInput implements ComponentTextInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $text,
        /** @var \Plain\Generated\ComponentTextSize|null */
        private readonly ComponentTextSize|null $textSize = null,
        /** @var \Plain\Generated\ComponentTextColor|null */
        private readonly ComponentTextColor|null $textColor = null,
        /** @var \Plain\Generated\ComponentTextColor|null */
        private readonly ComponentTextColor|null $color = null,
        /** @var \Plain\Generated\ComponentTextSize|null */
        private readonly ComponentTextSize|null $size = null,
    ) {
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getTextSize(): ComponentTextSize|null
    {
        return $this->textSize;
    }

    public function getTextColor(): ComponentTextColor|null
    {
        return $this->textColor;
    }

    public function getColor(): ComponentTextColor|null
    {
        return $this->color;
    }

    public function getSize(): ComponentTextSize|null
    {
        return $this->size;
    }
}
