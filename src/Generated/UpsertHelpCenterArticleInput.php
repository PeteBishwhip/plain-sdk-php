<?php

/**
 * Auto-Generated
 */

declare(strict_types=1);

namespace Plain\Generated;

final class UpsertHelpCenterArticleInput implements UpsertHelpCenterArticleInputInterface
{
    public function __construct(
        /** @var string */
        private readonly string $helpCenterId,
        /** @var string */
        private readonly string $title,
        /** @var string */
        private readonly string $contentHtml,
        /** @var string|null */
        private readonly string|null $helpCenterArticleId = null,
        /** @var string|null */
        private readonly string|null $helpCenterArticleGroupId = null,
        /** @var string|null */
        private readonly string|null $description = null,
        /** @var string|null */
        private readonly string|null $slug = null,
        /** @var \Plain\Generated\HelpCenterArticleStatus|null */
        private readonly HelpCenterArticleStatus|null $status = null,
    ) {
    }

    public function getHelpCenterId(): string
    {
        return $this->helpCenterId;
    }

    public function getHelpCenterArticleId(): string|null
    {
        return $this->helpCenterArticleId;
    }

    public function getHelpCenterArticleGroupId(): string|null
    {
        return $this->helpCenterArticleGroupId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function getContentHtml(): string
    {
        return $this->contentHtml;
    }

    public function getSlug(): string|null
    {
        return $this->slug;
    }

    public function getStatus(): HelpCenterArticleStatus|null
    {
        return $this->status;
    }
}
