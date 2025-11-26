<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ComponentLinkButtonInput implements ComponentLinkButtonInputInterface
{
    public function __construct(
        /** @var string|null */
        private readonly string|null $linkButtonUrl = null,
        /** @var string|null */
        private readonly string|null $linkButtonLabel = null,
        /** @var string|null */
        private readonly string|null $url = null,
        /** @var string|null */
        private readonly string|null $label = null,
    ) {
    }

    public function getLinkButtonUrl(): string|null
    {
        return $this->linkButtonUrl;
    }

    public function getLinkButtonLabel(): string|null
    {
        return $this->linkButtonLabel;
    }

    public function getUrl(): string|null
    {
        return $this->url;
    }

    public function getLabel(): string|null
    {
        return $this->label;
    }
}
