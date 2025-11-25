<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class ComponentRowContentInput implements ComponentRowContentInputInterface
{
    public function __construct(
        /** @var \Plain\Generated\ComponentTextInput|null */
        private readonly ComponentTextInput|null $componentText = null,
        /** @var \Plain\Generated\ComponentPlainTextInput|null */
        private readonly ComponentPlainTextInput|null $componentPlainText = null,
        /** @var \Plain\Generated\ComponentDividerInput|null */
        private readonly ComponentDividerInput|null $componentDivider = null,
        /** @var \Plain\Generated\ComponentLinkButtonInput|null */
        private readonly ComponentLinkButtonInput|null $componentLinkButton = null,
        /** @var \Plain\Generated\ComponentSpacerInput|null */
        private readonly ComponentSpacerInput|null $componentSpacer = null,
        /** @var \Plain\Generated\ComponentBadgeInput|null */
        private readonly ComponentBadgeInput|null $componentBadge = null,
        /** @var \Plain\Generated\ComponentCopyButtonInput|null */
        private readonly ComponentCopyButtonInput|null $componentCopyButton = null,
    ) {
    }

    public function getComponentText(): ComponentTextInput|null
    {
        return $this->componentText;
    }

    public function getComponentPlainText(): ComponentPlainTextInput|null
    {
        return $this->componentPlainText;
    }

    public function getComponentDivider(): ComponentDividerInput|null
    {
        return $this->componentDivider;
    }

    public function getComponentLinkButton(): ComponentLinkButtonInput|null
    {
        return $this->componentLinkButton;
    }

    public function getComponentSpacer(): ComponentSpacerInput|null
    {
        return $this->componentSpacer;
    }

    public function getComponentBadge(): ComponentBadgeInput|null
    {
        return $this->componentBadge;
    }

    public function getComponentCopyButton(): ComponentCopyButtonInput|null
    {
        return $this->componentCopyButton;
    }
}
