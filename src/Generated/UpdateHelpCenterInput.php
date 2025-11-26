<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpdateHelpCenterInput implements UpdateHelpCenterInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $helpCenterId,
        /** @var \Plain\Generated\HelpCenterType|null */
        private readonly HelpCenterType|null $type = null,
        /** @var string|null */
        private readonly string|null $publicName = null,
        /** @var string|null */
        private readonly string|null $internalName = null,
        /** @var string|null */
        private readonly string|null $description = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $headCustomJs = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $bodyCustomJs = null,
        /** @var bool|null */
        private readonly bool|null $isChatEnabled = null,
        /** @var \Plain\Generated\HelpCenterThemedImageInput|null */
        private readonly HelpCenterThemedImageInput|null $favicon = null,
        /** @var \Plain\Generated\HelpCenterThemedImageInput|null */
        private readonly HelpCenterThemedImageInput|null $logo = null,
        /** @var \Plain\Generated\StringInput|null */
        private readonly StringInput|null $color = null,
        /** @var \Plain\Generated\WorkspaceFileInput|null */
        private readonly WorkspaceFileInput|null $socialPreviewImage = null,
        /** @var \Plain\Generated\HelpCenterThemedImageInput|null */
        private readonly HelpCenterThemedImageInput|null $agentAvatarImage = null,
        /** @var string|null */
        private readonly string|null $subdomain = null,
        /** @var \Plain\Generated\HelpCenterPortalSettingsInput|null */
        private readonly HelpCenterPortalSettingsInput|null $portalSettings = null,
        /** @var \Plain\Generated\HelpCenterAccessSettingsInput|null */
        private readonly HelpCenterAccessSettingsInput|null $access = null,
        /** @var \Plain\Generated\HelpCenterAuthMechanismInput|null */
        private readonly HelpCenterAuthMechanismInput|null $authMechanism = null,
    ) {
    }

    public function getHelpCenterId(): string
    {
        return $this->helpCenterId;
    }

    public function getType(): HelpCenterType|null
    {
        return $this->type;
    }

    public function getPublicName(): string|null
    {
        return $this->publicName;
    }

    public function getInternalName(): string|null
    {
        return $this->internalName;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function getHeadCustomJs(): StringInput|null
    {
        return $this->headCustomJs;
    }

    public function getBodyCustomJs(): StringInput|null
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

    public function getColor(): StringInput|null
    {
        return $this->color;
    }

    public function getSocialPreviewImage(): WorkspaceFileInput|null
    {
        return $this->socialPreviewImage;
    }

    public function getAgentAvatarImage(): HelpCenterThemedImageInput|null
    {
        return $this->agentAvatarImage;
    }

    public function getSubdomain(): string|null
    {
        return $this->subdomain;
    }

    public function getPortalSettings(): HelpCenterPortalSettingsInput|null
    {
        return $this->portalSettings;
    }

    public function getAccess(): HelpCenterAccessSettingsInput|null
    {
        return $this->access;
    }

    public function getAuthMechanism(): HelpCenterAuthMechanismInput|null
    {
        return $this->authMechanism;
    }
}
