<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class CreateHelpCenterInput implements CreateHelpCenterInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $publicName,
        /** @var string */
        private readonly string $internalName,
        /** @var \Plain\Generated\HelpCenterType */
        private readonly HelpCenterType $type,
        /** @var string */
        private readonly string $description,
        /** @var string */
        private readonly string $subdomain,
        /** @var string|null */
        private readonly string|null $headCustomJs = null,
        /** @var string|null */
        private readonly string|null $bodyCustomJs = null,
        /** @var bool|null */
        private readonly bool|null $isChatEnabled = null,
        /** @var \Plain\Generated\HelpCenterThemedImageInput|null */
        private readonly HelpCenterThemedImageInput|null $favicon = null,
        /** @var \Plain\Generated\HelpCenterThemedImageInput|null */
        private readonly HelpCenterThemedImageInput|null $logo = null,
        /** @var string|null */
        private readonly string|null $color = null,
        /** @var \Plain\Generated\WorkspaceFileInput|null */
        private readonly WorkspaceFileInput|null $socialPreviewImage = null,
        /** @var \Plain\Generated\HelpCenterAuthMechanismInput|null */
        private readonly HelpCenterAuthMechanismInput|null $authMechanism = null,
    ) {
    }

    public function getPublicName(): string
    {
        return $this->publicName;
    }

    public function getInternalName(): string
    {
        return $this->internalName;
    }

    public function getType(): HelpCenterType
    {
        return $this->type;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getHeadCustomJs(): string|null
    {
        return $this->headCustomJs;
    }

    public function getBodyCustomJs(): string|null
    {
        return $this->bodyCustomJs;
    }

    public function getIsChatEnabled(): bool|null
    {
        return $this->isChatEnabled;
    }

    public function getFavicon(): HelpCenterThemedImageInput|null
    {
        return $this->favicon;
    }

    public function getLogo(): HelpCenterThemedImageInput|null
    {
        return $this->logo;
    }

    public function getColor(): string|null
    {
        return $this->color;
    }

    public function getSocialPreviewImage(): WorkspaceFileInput|null
    {
        return $this->socialPreviewImage;
    }

    public function getSubdomain(): string
    {
        return $this->subdomain;
    }

    public function getAuthMechanism(): HelpCenterAuthMechanismInput|null
    {
        return $this->authMechanism;
    }
}
